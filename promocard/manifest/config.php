<?php
	$settings = array(


		###### ADMIN ######
		'admin' => array(
			'max_upload_size' => '5242880',
		),
		########


		###### SYMPHONY ######
		'symphony' => array(
			'admin-path' => 'symphony',
			'pagination_maximum_rows' => '20',
			'association_maximum_rows' => '5',
			'lang' => 'en',
			'pages_table_nest_children' => 'no',
			'version' => '2.6.3',
			'cookie_prefix' => 'sym-',
			'session_gc_divisor' => '10',
			'cell_truncation_length' => '75',
			'enable_xsrf' => 'yes',
		),
		########


		###### LOG ######
		'log' => array(
			'archive' => '1',
			'maxsize' => '102400',
		),
		########


		###### DATABASE ######
		'database' => array(
			'host' => 'localhost',
			'port' => '3306',
			'user' => 'root',
			'password' => 'admin',
			'db' => 'promocard',
			'tbl_prefix' => 'sym_',
			'query_caching' => 'on',
			'query_logging' => 'on',
		),
		########


		###### PUBLIC ######
		'public' => array(
			'display_event_xml_in_source' => 'no',
		),
		########


		###### GENERAL ######
		'general' => array(
			'sitename' => 'PromoCard',
			'useragent' => 'Symphony/2.6.3',
		),
		########


		###### FILE ######
		'file' => array(
			'write_mode' => '0644',
		),
		########


		###### DIRECTORY ######
		'directory' => array(
			'write_mode' => '0755',
		),
		########


		###### REGION ######
		'region' => array(
			'time_format' => 'g:i a',
			'date_format' => 'm/d/Y',
			'datetime_separator' => ' ',
			'timezone' => 'Europe/Rome',
		),
		########


		###### CACHE_DRIVER ######
		'cache_driver' => array(
			'default' => 'database',
		),
		########


		###### IMAGE ######
		'image' => array(
			'cache' => '1',
			'quality' => '90',
		),
		########


		###### MAINTENANCE_MODE ######
		'maintenance_mode' => array(
			'enabled' => 'no',
		),
		########
	);
