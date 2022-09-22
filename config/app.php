<?php
    return $config = [
        'root' => dirname(__DIR__),
		'connections' => array(
			'ils-local' => array(
				'DB_DRIVER' => "mysql",
				'DB_HOST' => "localhost",
				'DB_DATABASE' => "database",
				'DB_USERNAME' => "root",
				'DB_PASSWORD' => ""
			),
			'ils-live' => array(
				'DB_DRIVER' => "mysql",
				'DB_HOST' => "localhost",
				'DB_DATABASE' => "database",
				'DB_USERNAME' => "root",
				'DB_PASSWORD' => ""
			)
		),
        'app' => array(
			'organization' => "Cavite State University",
			'orgabbr' => "CvSU",
			'system' => "Integrated Library System",
			'systemabbr' => "ILS",
			'subsystem' => "",
			'subsystemabbr' => "",
			'subsystemversion' => "",
			'appurl' => ""
		),
		'userClass' => "\IntegratedLibrarySystem\Core\Controllers\User"
    ];