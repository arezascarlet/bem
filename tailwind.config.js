import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                background: "hsl(var(--background))",
                foreground: "hsl(var(--foreground))",
                accent: "hsl(var(--accent))",
                card: "hsl(var(--card))",
                body: "hsl(var(--body))",
            }
        },
    },

    plugins: [forms],
};
