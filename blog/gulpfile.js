const { src, dest, watch } = require('gulp')

const sass = require('gulp-sass')

const compileSass = () =>
  src('css/style.scss')
    .pipe(
      sass({
      outputStyle: 'expanded'
    })
  )
    .pipe(dest('css'))

const watchSassFiles = () => watch('css/style.scss', compileSass)

exports.default = watchSassFiles

