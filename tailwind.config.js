/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./inc/*.{php,html,js}"
    ],
  theme: {
    extend: {},
  },
  plugins: [require('daisyui'),],
}

