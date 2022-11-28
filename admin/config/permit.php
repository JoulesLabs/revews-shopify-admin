<?php

return [
    'connection' => 'pgsql_admin',
    'users' => [
        'model' => \JoulesLabs\IllumineAdmin\Models\IllumineAdmin::class,
        'table' => 'illumine_admin_users',
    ],

    'roles_table' => 'roles',
    'user_roles_table' => 'user_roles',
    
    'debug' => [
        'superuser_mode' => false,
    ],

    'abilities'   => [
        /*"module"  => ['create', 'update', 'delete'],*/
        'user' => ['create', 'update', 'view', 'list', 'reset_password'],
        'role' => ['create', 'update', 'list'],
    ],

    'policies'  => [
        /*'module' => [
            'update'    => '\App\Permit\Policies\PostPolicy@update',
        ],*/
    ],



    'roles' => [
        /*'role_name' => [
            'ability.*',
        ],*/
    ]


];
