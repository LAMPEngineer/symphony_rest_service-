<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'employee_list' => [[], ['_controller' => 'App\\Controller\\EmployeeController::index'], [], [['text', '/']], [], []],
    'get_employees' => [[], ['_controller' => 'App\\Controller\\EmployeeController::getAll'], [], [['text', '/employees/']], [], []],
];