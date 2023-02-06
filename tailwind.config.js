const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Raleway', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'greyLetter': '#707070',
                'blackLetter': '#373737',
                'greenBackground': '#36A5A1',
                'white': '#FFFFFF',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'),   require('tw-elements/dist/plugin')],
};
