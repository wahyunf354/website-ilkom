const gulp = require('gulp');
const uglifycss = require('gulp-uglifycss');
const image = require('gulp-image');
const htmlmin = require('gulp-html-minifier');

gulp.task('css', async function() {
  gulp.src('./css/*.css')
  .pipe(uglifycss({
    "maxLineLen": 80,
    "uglyComments": true
  }))
  .pipe(gulp.dest('./dist/css/'));
})
 
gulp.task('image', async function() {
  gulp.src('./assets/**/*')
    .pipe(image())
    .pipe(gulp.dest('./dist/assets'));
});
 
gulp.task('minify', async function() {
  gulp.src('./*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('./dist'))
});
