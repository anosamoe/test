'use strict';

module.exports = function(grunt) {

	grunt.initConfig({
		
		pkg: grunt.file.readJSON('package.json'),
		
		sass: {
			dist: {
				options: {
					sourcemap: 'none',
					style:'compressed'
				},
				files: [{
					'./assets/css/style.css': './assets/sass/style.scss',
				}]
			}
		},
		autoprefixer:{
			dist:{
				files:{
					'./assets/css/style.css':'./assets/css/style.css'
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'autoprefixer']
			},
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.registerTask('default', ['watch']);
};