# Vue bootstrap for Elgg

Provides a generic bootstrap for using Vue components inside Elgg.

## Setup

Inside your plugin create:

### `package.json`

```json
{
    "private": true,
    "scripts": {
        "build": "npm run production && rm ./views/default/mix-manifest.json && php ../../elgg-cli flush",
        "production": "npm run components:parse && cross-env NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
        "components:parse": "node node_modules/@hypejunction/vue-scanner/cli/scan.js"
    },
    "dependencies": {
        "cross-env": "^5.2.0",
        "global": "^4.4.0",
        "laravel-mix": "^4.1.2",
        "lodash.camelcase": "^4.3.0",
        "vue": "^2.6.10",
        "vue-template-compiler": "^2.6.10"
    },
    "devDependencies": {
        "@babel/plugin-syntax-dynamic-import": "^7.2.0",
        "@hypejunction/vue-scanner": "^1.1.3"
    },
    "vue-scanner": {
        "src": {
            "components": {
                "dirs": [
                    "./src/PLUGIN_NAME/components/"
                ],
                "async": false
            }
        },
        "target": {
            "js": "./src/PLUGIN_NAME/components.js",
            "json": "./src/PLUGIN_NAME/components.json"
        },
        "chunks": true,
        "requestChunks": true,
        "chunkPrefix": "PLUGIN_NAME/"
    }
}
```

### `webpack.mix.js`

```js
let mix = require('laravel-mix');

mix.setPublicPath('views/default/')
	.setResourceRoot('views/default/')
	.js('src/PLUGIN_NAME/init.js', 'views/default/PLUGIN_NAME/init.js');

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
		publicPath: `/mod/PLUGIN_NAME/views/default/`,
	}
});
```

### `src/PLUGIN_NAME/init.js`

Inside your `init.js` you can use ES6 to import Vue, register your components, setup your Vue extensions etc.

```js
import Vue from 'vue';

// Vue.component();

import './components';
```

The above setup makes it easier to work with components, using `vue-scanner`, which will automatically register all the components for you. You will just need to import the `components.js` in your `init.js`.

Then run `yarn build` -  this will build your components into `views/default`, so you can use them inside your templates.

You can then add these components into your plugin's views:

```php
echo \hypeJunction\VueBoot\Vue::instance()->render('MyComponent', [
	'params' => $entity->getParams(),
	// list all props to pass to the component
], [
	'PLUGIN_NAME/init', // load the init script
]);
```