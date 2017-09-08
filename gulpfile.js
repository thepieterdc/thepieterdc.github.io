const gulp = require('gulp');
const babel = require('gulp-babel');
const coffee = require('gulp-coffee');
const concat = require('gulp-concat');
const copy = require('gulp-copy');
const fs = require('fs');
const merge2 = require('merge2');
const minify = require('gulp-clean-css');
const order = require('gulp-order');
const realFavicon = require('gulp-real-favicon');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');

/* CSS */
const cssCommon = ['assets/bower/font-awesome/css/font-awesome.min.css', 'assets/bower/devicon/css/devicon.min.css', 'assets/css/src/*.sass'];
const cssDaily = ['assets/bower/bootswatch/flatly/bootstrap.min.css'];
const cssNightly = ['assets/bower/bootswatch/darkly/bootstrap.min.css'];
const cssOut = 'assets/css';

/* JS */

/* COFFEE */

/* FAVICON */

/* FONTS */
const fontsIn = ['assets/bower/font-awesome/fonts/*', 'assets/bower/devicon/fonts/*'];
const fontsOut = 'assets/fonts';

/* TASKS */
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

gulp.task('css', ['css-common', 'css-daily', 'css-nightly'], function () {
});

gulp.task('favicon', function () {
    realFavicon.generateFavicon({
        masterPicture: 'favicon.png',
        dest: '.',
        iconsPath: '/',
        design: {
            ios: {
                pictureAspect: 'backgroundAndMargin',
                backgroundColor: '#ffffff',
                margin: '14%',
                assets: {
                    ios6AndPriorIcons: false,
                    ios7AndLaterIcons: false,
                    precomposedIcons: false,
                    declareOnlyDefaultIcon: true
                }
            },
            desktopBrowser: {},
            windows: {
                pictureAspect: 'noChange',
                backgroundColor: '#ffc40d',
                onConflict: 'override',
                assets: {
                    windows80Ie10Tile: false,
                    windows10Ie11EdgeTiles: {
                        small: false,
                        medium: true,
                        big: false,
                        rectangle: false
                    }
                }
            },
            androidChrome: {
                pictureAspect: 'noChange',
                themeColor: '#ffffff',
                manifest: {
                    display: 'standalone',
                    orientation: 'notSet',
                    onConflict: 'override',
                    declared: true
                },
                assets: {
                    legacyIcon: false,
                    lowResolutionIcons: false
                }
            },
            safariPinnedTab: {
                pictureAspect: 'silhouette',
                themeColor: '#5bbad5'
            }
        },
        settings: {
            scalingAlgorithm: 'Mitchell',
            errorOnImageTooSmall: false
        },
        markupFile: 'favicon.json'
    });
});

gulp.task('fonts', function () {
    return gulp.src(fontsIn)
        .pipe(copy(fontsOut, {prefix: 100}))
});

gulp.task('default', ['css', 'favicon', 'fonts'], function () {
});