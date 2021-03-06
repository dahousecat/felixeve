'use strict';

const gulp         = require('gulp')
const sass         = require('gulp-sass')
sass.compiler      = require('sass');
const sourcemaps   = require('gulp-sourcemaps')
const autoprefixer = require('autoprefixer')
const postcss      = require('gulp-postcss')
const { series }   = require('gulp');
const cleanCSS     = require('gulp-clean-css');
const htmlmin      = require('gulp-htmlmin');
const exec         = require('gulp-exec');
const babel        = require('gulp-babel');
const uglify       = require('gulp-uglify-es').default;
const imageResize  = require('gulp-image-resize');
const rename       = require("gulp-rename");

/**
 * Turn SASS in CSS.
 */
function css(cb) {
  gulp.src('./src/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer('last 2 versions')]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./www/css'));
  cb();
}

/**
 * Turn SASS in minified CSS.
 */
function prodCss(cb) {
  gulp.src('./src/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer('last 2 versions')]))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./www/css'));
  cb();
}

function js(cb) {
  gulp.src('./src/js/script.js')
      // .pipe(babel())
      .pipe(uglify())
      .pipe(gulp.dest('./www/js'))
  cb();
}

/**
 * Turn index.php into index.html.
 */
function buildHtml(cb) {
  gulp.src('./src/index.php').pipe(exec('php src/index.php > build/index.html'));
  gulp.src('./src/cv.html').pipe(gulp.dest('./build'));
  cb();
}

/**
 * Move files into www.
 */
function moveFiles(cb) {
  gulp.src('./src/.htaccess').pipe(gulp.dest('./www'));
  gulp.src('./src/sw.js').pipe(gulp.dest('./www'));
  gulp.src('./src/manifest.json').pipe(gulp.dest('./www'));
  gulp.src('./src/fonts/*').pipe(gulp.dest('./www/fonts'));
  gulp.src('./src/files/*').pipe(gulp.dest('./www/files'));
  cb();
}

/**
 * Take main.css and put in inline in a <style> tag.
 */
function inlineCss(cb) {
  gulp.src('./build/index.html')
      .pipe(exec('./scripts/inline_css.sh'));
  cb();
}

/**
 * Minify HTML.
 */
function minifyHtml(cb) {
  gulp.src('./build/*.html')
      .pipe(htmlmin({ collapseWhitespace: true }))
      .pipe(gulp.dest('./www'));
  cb();
}

/**
 * Don't minify HTML, just move it to it's final destination.
 */
function moveHtml(cb) {
  gulp.src('./build/*.html').pipe(gulp.dest('./www'));
  cb();
}

/**
 * Resize felix images
 */
function resizeFelixImage(cb) {
  const sizes = [130, 210, 260, 420];
  const formats = ['jpg', 'png', 'webp'];
  const src = './src/images/felix/*.jpg';
  const dest = './www/img/felix';
  resizeImages(src, dest, sizes, formats, cb);
}

/**
 * Square felix images
 */
function squareFelixImage(cb) {
  const sizes = [240];
  const formats = ['jpg', 'png', 'webp'];
  const src = './src/images/square_felix/*.jpg';
  const dest = './www/img/square_felix';
  resizeImages(src, dest, sizes, formats, cb);
}

/**
 * Resize portfolio images
 */
function resizePortfolioImage(cb) {
  const sizes = [350, 610];
  const formats = ['jpg', 'png', 'webp'];
  const src = './src/images/portfolio/*.jpg';
  const dest = './www/img/portfolio';
  resizeImages(src, dest, sizes, formats, cb);
}

function moveIcons(cb) {
  gulp.src('./src/images/icons/*')
    .pipe(gulp.dest('./www/img/icons'));
  cb();
}

/**
 * Resize image function.
 */
function resizeImages(src, dest, sizes, formats, cb) {
  for (const size of sizes) {
    for (const format of formats) {
      gulp.src(src)
        .pipe(imageResize({
          width: size,
          format: format,
        }))
        .pipe(rename(function (path) {
          path.basename += '-' + size;
        }))
        .pipe(gulp.dest(dest));
    }
  }
  cb();
}

gulp.task('watch', function () {
  gulp.watch('./src/sass/**/*.scss', css);
  gulp.watch('./src/js/**/*.js', js);
  gulp.watch('./index.php', buildHtml);
  gulp.watch('./cv.html', moveFiles);
});

exports.images = series(resizeFelixImage, squareFelixImage, resizePortfolioImage, moveIcons);
exports.css = series(css);
exports.prodCss = series(prodCss);
exports.inlineCss = series(inlineCss);
exports.js = series(js);
exports.html = series(buildHtml, moveFiles, moveHtml);
exports.prod = series(buildHtml, moveFiles, js, prodCss, inlineCss, minifyHtml);
exports.default = series(buildHtml, moveFiles, js, prodCss, moveHtml);
