/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
        'open': ['"Open Sans"', 'sans-serif'],
        'ubuntu': ['Ubuntu', 'sans-serif'],
    },
    extend: {
        colors: {
            'jade-50': '#D8FDF7',
            'jade-100': '#0CE9C4',
            'jade-200': '#0BD5B4',
            'jade-300': '#e8f5e9',
            'jade-400': '#0AC2A3',
            'jade-500': '#089C84',
            'jade-600': '#078872',
            'jade-700': '#067462',
            'jade-800': '#055F4A',
            'jade-900': '#056152',
            'azul-medio': '#003176',
            'azul-oscuro': '#0a1845',
            'amarillo-medio': '#ffcb09'
        }

    },
  },
  plugins: [],
}

