const {series, parallel, src, dest, watch} = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer  = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    csso = require('gulp-csso'),
    concat = require('gulp-concat'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify-es').default,
    browserify = require('browserify'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer'),
    imagemin = require('gulp-imagemin');


function css (){
    return src(["css/**/[^_]*.+(css|sass|scss)"])
        .pipe(sass({outputStyle: 'expanded'}))
        .pipe(csso())
        .pipe(autoprefixer())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(concat('styles.css'))
        .pipe(dest('../release/css'));
}

function js (){
    return src(["js/**/[^_]*.js"])
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('scripts.js'))
        .pipe(dest('prerelease/js'));
}

function browserify_js (){
    return browserify('prerelease/js/scripts.js').bundle()
        .pipe(source('scripts.js'))
        .pipe(buffer())
        .pipe(uglify())
        .pipe(dest('../release/js'))
}

function img (){
    return src(["img/**/*.+(jpg|png|jpeg|gif|svg)"])
        .pipe(imagemin())
        .pipe(dest('../release/img'))
}

function fonts(){
    return src("fonts/**/*.*")
        .pipe(dest("../release/fonts"))
}

exports.css = css;
exports.js = series(js, browserify_js);
exports.img = img;
exports.fonts = fonts;
exports.default = series(img, css, js, browserify_js, fonts);

exports.watch = function() {
    watch(["css/**/[^_]*.+(css|sass|scss)"], css);
    watch(["js/**/[^_]*.js"], js);
    watch('prerelease/js/scripts.js', browserify_js);
    watch(["img/**/*.+(jpg|png|jpeg|gif|svg)"], img)
};