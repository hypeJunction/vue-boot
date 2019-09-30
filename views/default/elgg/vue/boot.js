require(['elgg', 'vue', 'elgg/Vue'], function (elgg, Vue) {
	window.Vue = Vue;

	require(elgg.data.vue.deps, function () {
		elgg.trigger_hook('mount', 'vue', {}, null);
	});
});