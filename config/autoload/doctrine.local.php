<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'mysql',
                    'port' => '3306',
                    'charset' => 'utf8',
                    'user' => 'root',
                    'password' => 'root',
                    'dbname' => 'dbname',
                )
            )
        ),
    ),
);