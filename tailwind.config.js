 @type {import('tailwindcss').Config} 
module.exports = {
  content: ["./src/**/*.{html,js,php}","./node_modules/flowbite/**/*.js"],
  theme: {
    fontFamily: {
      Poppins: ['Poppins', 'cursive'],
      Roboto: ['Roboto', 'cursive'],

  },
    extend: {},
  },
  plugins: [require('flowbite/plugin')],
}
