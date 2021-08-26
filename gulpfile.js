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
  gulp.src('./index.php')
      .pipe(exec('php index.php > www/index.html'));
  cb();
}

/**
 * Take main.css and put in inline in a <style> tag.
 */
function inlineCss(cb) {
  gulp.src('./index.php')
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

gulp.task('watch', function () {
  gulp.watch('./src/sass/**/*.scss', css);
  gulp.watch('./src/js/**/*.js', js);
  gulp.watch('./index.php', buildHtml);
});

exports.css = series(css);
exports.js = series(js);
exports.html = series(buildHtml);
exports.prod = series(prodCss, minifyHtml);
exports.default = series(buildHtml, css);
