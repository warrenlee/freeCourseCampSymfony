/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.html.twig',
    './assets/**/*.js',
    './vendor/symfony/twig-bridge/Resources/views/Form/tailwind_2_layout.html.twig',
    './src/Form/**/*.php',
  ],
  theme: {
    extend: {},
    container: {
      center: true,
    },
  },
  plugins: [require('@tailwindcss/forms')],
}
