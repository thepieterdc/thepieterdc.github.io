const gulp = require('gulp');
const babel = require('gulp-babel');
const coffee = require('gulp-coffee');
const concat = require('gulp-concat');
const copy = require('gulp-copy');
const fs = require('fs');
const merge2 = require('merge2');
const minify = require('gulp-clean-css');
const order = require('gulp-order');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');

/* CSS */
const cssCommon = ['node_modules/font-awesome/css/font-awesome.min.css', 'node_modules/devicon/devicon.min.css', 'node_modules/devicon/devicon-colors.css', 'assets/css/src/*.sass', 'assets/css/src/*.scss'];
const cssDaily = ['node_modules/bootswatch/dist/flatly/bootstrap.min.css'];
const cssNightly = ['node_modules/bootswatch/dist/darkly/bootstrap.min.css'];
const cssOut = 'assets/css';

/* JS */
const jsIn = ['node_modules/jquery/dist/jquery.min.js'];
const jsOut = 'assets/js';

/* COFFEE */
const coffeeIn = ['assets/js/src/*.coffee'];
const coffeeOut = 'assets/js';

/* FONTS */
const fontsIn = ['node_modules/font-awesome/fonts/*', 'node_modules/devicon/fonts/*'];
const fontsOut = 'assets/fonts';

/* TASKS */
gulp.task('coffee', function () {
    return gulp.src(coffeeIn)
        .pipe(coffee())
        .pipe(babel())
        .pipe(concat('combined.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(coffeeOut));
});

gulp.task('css-common', function () {
    return gulp.src(cssCommon)
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'compressed'
        }))
        .pipe(concat('common.min.css'))
        .pipe(minify())
        .pipe(gulp.dest(cssOut));
});

gulp.task('css-daily', function () {
    return gulp.src(cssDaily)
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'compressed'
        }))
        .pipe(concat('daily.min.css'))
        .pipe(minify())
        .pipe(gulp.dest(cssOut));
});

gulp.task('css-nightly', function () {
    return gulp.src(cssNightly)
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'compressed'
        }))
        .pipe(concat('nightly.min.css'))
        .pipe(minify())
        .pipe(gulp.dest(cssOut));
});

gulp.task('fonts', function () {
    return gulp.src(fontsIn)
        .pipe(copy(fontsOut, {prefix: 100}))
});

gulp.task('js', function () {
    return gulp.src(jsIn)
        .pipe(babel())
        .pipe(concat('vendor.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsOut));
});

gulp.task('default', gulp.series('coffee', 'css-common', 'css-daily', 'css-nightly', 'fonts', 'js', function (done) {
    done();
}));