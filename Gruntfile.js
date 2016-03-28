module.exports = function(grunt) {
	grunt.initConfig({
		cssmin: {
			combine: {
				files: {
					'assets/css/style.min.css': [
						'assets/plugins/bootstrap/css/bootstrap.min.css',
						'assets/css/style.css',
						'assets/css/headers/header-default.css',
						'assets/css/footers/footer-v1.css',
						'assets/plugins/font-awesome/css/font-awesome.min.css',
						'assets/plugins/parallax-slider/css/parallax-slider.css',
						'assets/plugins/owl-carousel/owl-carousel/owl.carousel.css',
						'assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css',
						'assets/plugins/fancybox/source/jquery.fancybox.css',
						'assets/css/pages/page_contact.css',
						'assets/css/custom.css',
					]
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('css', ['cssmin']);
};