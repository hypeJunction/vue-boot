<?php

namespace hypeJunction\VueBoot;

use Elgg\PluginBootstrap;

class Bootstrap extends PluginBootstrap {

	public function load() {

	}

	public function boot() {

	}

	public function init() {
		elgg_register_plugin_hook_handler('elgg.data', 'page', ConfigureVue::class);

		if (elgg_get_config('environment') === 'development') {
			elgg_define_js('vue', [
				'src' => 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js',
				'exports' => 'Vue',
			]);
		} else {
			elgg_define_js('vue', [
				'src' => 'https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js',
				'exports' => 'Vue',
			]);
		}

		elgg_extend_view('elgg.js', 'elgg/vue/boot.js');
	}

	public function ready() {

	}

	public function shutdown() {

	}

	public function activate() {

	}

	public function deactivate() {

	}

	public function upgrade() {

	}
}