'use strict';

const gulp         = require('gulp')
const sass         = require('gulp-sass')
const sourcemaps   = require('gulp-sourcemaps')
const autoprefixer = require('autoprefixer')
const postcss      = require('gulp-postcss')
const { series }   = require('gulp');
sass.compiler      = require('sass');
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
    .pipe(gulp.dest('./www/src/css'));
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
    .pipe(gulp.dest('./www/src/css'));
  cb();
}

function js(cb) {
  gulp.src('./src/js/script.js')
      // .pipe(babel())
      .pipe(uglify())
      .pipe(gulp.dest('./www/src/js'))
  cb();
}

/**
 * Turn index.php into index.html.
 */
function buildHtml(cb) {
  gulp.src('./src/index.php')
      .pipe(exec('php src/index.php > www/index.html'));
  cb();
}

/**
 * Move files into www.
 */
function moveFiles(cb) {
  gulp.src('./src/cv/index.html').pipe(gulp.dest('./www/cv'));
  gulp.src('./src/sw.js').pipe(gulp.dest('./www'));
  gulp.src('./src/manifest.json').pipe(gulp.dest('./www'));
  cb();
}

/**
 * Take main.css and put in inline in a <style> tag.
 */
function inlineCss(cb) {
  gulp.src('./www/index.html')
      .pipe(exec('./scripts/inline_css.sh'));
  cb();
}

/**
 * Minify HTML.
 */
function minifyHtml(cb) {
  gulp.src('./www/*.html')
      .pipe(htmlmin({ collapseWhitespace: true }))
      .pipe(gulp.dest('./www'));
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
});

exports.images = series(resizeFelixImage, squareFelixImage, resizePortfolioImage, moveIcons);
exports.css = series(css);
exports.prodCss = series(prodCss);
exports.inlineCss = series(inlineCss);
exports.js = series(js);
exports.html = series(buildHtml, moveFiles);
exports.prod = series(buildHtml, moveFiles, js, prodCss, inlineCss, minifyHtml);
exports.default = series(buildHtml, moveFiles, js, prodCss);
