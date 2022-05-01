const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js");

mix.sass("resources/sass/tailwind.scss", "public/css")
    .options({
        postCss: [require("tailwindcss")],
    })
    .sass("resources/sass/app.scss", "public/css");
