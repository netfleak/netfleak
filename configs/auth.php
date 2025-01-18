<?php

return [
  'defaults' => [
    'guard' => 'web',
    'passwords' => 'users',
  ],
  'providers' => [
    'users' => [
        'model' => 'App\Models\User',
    ],
  ],
  'controllers' => [
    'login' => 'App\Http\Controllers\Auth\LoginController',
    'register' => 'App\Http\Controllers\Auth\RegisterController',
    'reset' => 'App\Http\Controllers\Auth\ResetPasswordController',
  ],
  'password_timeout' => 10800,
  'login' => [
    'path' => '/auth/login'
  ]
];
