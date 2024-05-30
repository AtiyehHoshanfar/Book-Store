/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: ["./**/*.html"],
  theme: {
    fontFamily: {
      'sans': ['"Poetsen One"', ...defaultTheme.fontFamily.sans],
    },
    extend: {},
  },
  plugins: [],
}

