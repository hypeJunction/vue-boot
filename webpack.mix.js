let mix = require('laravel-mix');

mix.setPublicPath('views/default/')
	.setResourceRoot('views/default/')
	.js('src/elgg/Vue.js', 'views/default/elgg/Vue.js');

mix.webpackConfig({
	externals: {
		elgg: 'elgg',
		vue: 'vue',
	},

	optimization: {
		splitChunks: false,
	},

	output: {
		libraryTarget: 'umd',
		publicPath: `/mod/vue-boot/views/default/`,
	}
});