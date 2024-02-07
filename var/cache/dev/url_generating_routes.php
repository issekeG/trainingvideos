<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'app_category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'app_category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_video_index' => [[], ['_controller' => 'App\\Controller\\VideoController::index'], [], [['text', '/video/']], [], [], []],
    'app_video_search' => [[], ['_controller' => 'App\\Controller\\VideoController::search'], [], [['text', '/video/']], [], [], []],
    'update_status' => [['status', 'id'], ['_controller' => 'App\\Controller\\VideoController::updateStatus'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'status', true], ['text', '/video/update']], [], [], []],
    'app_video_new' => [[], ['_controller' => 'App\\Controller\\VideoController::new'], [], [['text', '/video/form']], [], [], []],
    'app_video_show' => [['id'], ['_controller' => 'App\\Controller\\VideoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'app_video_edit' => [['id'], ['_controller' => 'App\\Controller\\VideoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'app_video_delete' => [['id'], ['_controller' => 'App\\Controller\\VideoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'dashboard_category' => [['category_id'], ['_controller' => 'App\\Controller\\VideoController::showShoesByStatus'], [], [['variable', '/', '[^/]++', 'category_id', true], ['text', '/videoupdate']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];