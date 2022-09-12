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

mix.js('vendor/twbs/bootstrap/dist/js/bootstrap.min.js', 'public/js/app.js')
    .postCss('vendor/twbs/bootstrap/dist/css/bootstrap.min.css', 'public/css/app.css', [
        //
    ]);
