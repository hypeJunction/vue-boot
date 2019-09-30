<?php

return [
	'api_launcher' => 'API Launcher',
	'api_launcher:dashboard' => 'API Dashboard',

	'item:object:api_definition' => 'API Definition',
	'collection:object:api_definition' => 'API Definitions',
	'add:object:api_definition' => 'Add API Definition',
	'edit:object:api_definition' => 'Edit API Definition',

	'item:object:api_instance' => 'API Instance',
	'collection:object:api_instance' => 'API Instances',
	'add:object:api_instance' => 'Create API Instance',
	'edit:object:api_instance' => 'Edit API Instance',

	'collection:object:api_definition:no_results' => 'You have not defined any APIs yet',

	'field:object:api_definition:title' => 'API Name',
	'field:object:api_definition:cost' => 'API Subscription Cost (points)',
	'field:object:api_definition:billing_cycle' => 'API Subscription Cycle',
	'field:object:api_definition:api_call_cost' => 'API Call Cost (points)',

	'api_launcher:script:create' => 'Create Script',
	'api_launcher:script:enable' => 'Enable Script',
	'api_launcher:script:disable' => 'Disable Script',
	'api_launcher:script:delete' => 'Delete Script',
	'api_launcher:script:reload' => 'Reload Script',

	'field:object:api_definition:parameter_ownership' => 'Parameter Ownership',

	'field:object:api_definition:parameters' => 'API Call Parameters',
	'field:object:api_definition:user_params_allowed' => 'Allow users to define custom parameters',

	'api_launcher:billing_cycle:lifetime' => 'Lifetime',
	'api_launcher:billing_cycle:yearly' => 'Yearly',
	'api_launcher:billing_cycle:monthly' => 'Monthly',
	'api_launcher:billing_cycle:weekly' => 'Weekly',

	'api_launcher:add_param' => 'Add Parameter',
	'api_launcher:param:name' => 'Name',
	'api_launcher:param:type' => 'Type',

	'api_launcher:value_type:integer-range' => 'IR - Integer Range',
	'api_launcher:value_type:integer-discrete' => 'ID - Integer Discrete',
	'api_launcher:value_type:float-range' => 'FR - Float Range',
	'api_launcher:value_type:float-discrete' => 'FD - Float Discrete',
	'api_launcher:value_type:text-discrete' => 'TD - Text Discrete',

	'api_launcher:api_definition:save:success' => 'API Definition has been successfully saved',
	'api_launcher:api_definition:save:error' => 'There was a problem saving the API Definition',

	'api_launcher:value:lower' => 'Lower bound',
	'api_launcher:value:upper' => 'Upper bound',
	'api_launcher:values' => 'Values, comma separated',

	'api_launcher:error:lower_bound_integer' => 'Lower bound must be an integer',
	'api_launcher:error:upper_bound_integer' => 'Upper bound must be an integer',
	'api_launcher:error:upper_bound_lower' => 'Upper bound must be higher than the lower bound',
	'api_launcher:error:non_integer' => 'Values can only contain integers',
	'api_launcher:error:lower_bound_float' => 'Lower bound must be a float',
	'api_launcher:error:upper_bound_float' => 'Upper bound must be a float',
	'api_launcher:error:non_float' => 'Values can only contain floats',

	'api_launcher:output:cost' => '%sP / %s',
	'api_launcher:output:api_call_cost' => '%sP per call',
	'api_launcher:output:cost:free' => 'Free',

	'api_launcher:module:scripts' => 'Scripts',
	'api_launcher:module:params' => 'Params',

	'api_launcher:add_api' => 'Add Instance',
	'collection:object:api_instance:no_results' => 'You have not created any APIs yet',

	'field:object:api_instance:definition' => 'API Type',

	'api_launcher:api_list:select' => 'Select',
];