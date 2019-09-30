<?php

namespace hypeJunction\VueBoot;

use Elgg\Di\ServiceFacade;

class Vue {

	use ServiceFacade;

	protected $deps = [];

	/**
	 * Returns registered service name
	 * @return string
	 */
	public static function name() {
		return 'vue';
	}

	/**
	 * Register a dependency to be loaded on this page
	 *
	 * @param string $dep Dep AMD module name
	 * @return void
	 */
	public function addDep($dep) {
		$this->deps[] = $dep;
	}

	/**
	 * Get all dependencies
	 *
	 * @return array
	 */
	public function getDeps() {
		return $this->deps;
	}

	/**
	 * Render a vue component placeholder
	 *
	 * @param string $component Component name
	 * @param array  $attrs     Component props
	 * @param array  $deps      Dependencies to load
	 *
	 * @return string
	 */
	public function render($component, array $attrs = [], array $deps = []) {
		foreach ($deps as $dep) {
			$this->addDep($dep);
		}

		$filtered_attrs = [
			'data-vue-component' => $component,
		];

		foreach ($attrs as $key => $value) {
			$filtered_attrs[$key] = json_encode($value);
		}

		return elgg_format_element($component, $filtered_attrs);
	}
}