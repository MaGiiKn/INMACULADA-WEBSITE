/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        poppins: ['Poppins', 'sans-serif'],
      },
      colors: {
        'custom-blue1': '#0A2647',
        'custom-blue2': '#144272',
        'custom-blue3': '#205295',
        'custom-blue4': '#2C74B3',
        'custom-white': '#DDE6ED'
      },
    },
  },
  plugins: [],
}