const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('resources/js/core.min.js', 'public/js')
    .copy('resources/js/script.js', 'public/js')
    .copy('resources/css/img.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
