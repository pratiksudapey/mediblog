/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"

    ],
    theme: {
        extend: {
            colors: {},
            content: [
                "./resources/**/*.blade.php",
                "./resources/**/*.js",
                "./resources/**/*.vue",
                "./node_modules/flowbite/**/*.js",
            ],
            spacing: {},
            padding: {},
            fontFamily: {
                Poppins: ['Poppins'],
            },
            fontSize: {
                '12': '12px',
                '16': '16px',
                '18': '18px',
                '20': '20px',
                '24': '24px',
                '28': '28px',
                '32': '32px',
                '44': '44px',
            },
            width: {
                '70': '70px',
                '180': '180px',
                '196': '196px',
            },
            lineHeight: {
                '1.2': '1.2rem',
                '1.25': '1.25rem',
                '1.5': '1.5rem',
                '1.75': '1.75rem',
                '2': '2rem',
                '12': '12px',
                '70': '70px',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
