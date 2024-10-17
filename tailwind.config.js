/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            font: {
                sans: ['Segoe UI', 'Roboto', 'sans-serif'],
            }
        },
      },
      plugins: [],
};
