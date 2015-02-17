module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      build: {
        src: ['js/libs/modernizr.js', 'js/libs/jquery.js', 'js/libs/jquery.backstretch.js', 'js/global.js'],
        dest: 'js/build/global.min.js'
      }
    },

		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'css/build/style.min.css': 'sass/style.scss'
				}
			}
		},

		watch: {
			css: {
				files: 'sass/style.scss',
				tasks: ['sass'],
			},
			js: {
				files: 'js/*',
				tasks: ['uglify'],
			},
		},

  });

  // Load the plugins.
  grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'sass', 'watch']);

};