import Vue from 'vue';
import elgg from 'elgg';
import ElggWrapper from '../ElggWrapper';
import camelCase from 'lodash.camelcase';

Vue.prototype.$elgg = elgg;
Vue.config.devtools = elgg.data.vue.dev;

elgg.register_hook_handler('mount', 'vue', () => {
	const Constructor = Vue.extend(ElggWrapper);

	document.querySelectorAll('[data-vue-component]').forEach((el) => {
		const data = {};

		for (let attr of el.attributes) {
			const name = camelCase(attr.name);

			try {
				data[name] = JSON.parse(attr.value);
			} catch (err) {
				data[name] = attr.value;
			}
		}

		delete data.dataVueComponent;

		const instance = new Constructor({
			propsData: {
				componentName: el.getAttribute('data-vue-component'),
				componentProps: data,
			},
		});

		instance.$mount();

		el.replaceWith(instance.$el);
	});
}, 1000);