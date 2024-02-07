<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/video' => [
            [['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_video_search', '_controller' => 'App\\Controller\\VideoController::search'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/video/form' => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/category/([^/]++)(?'
                    .'|(*:28)'
                    .'|/edit(*:40)'
                    .'|(*:47)'
                .')'
                .'|/video(?'
                    .'|/(?'
                        .'|update/([^/]++)/([^/]++)(*:92)'
                        .'|([^/]++)(?'
                            .'|(*:110)'
                            .'|/edit(*:123)'
                            .'|(*:131)'
                        .')'
                    .')'
                    .'|update/([^/]++)(*:156)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:193)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        92 => [[['_route' => 'update_status', '_controller' => 'App\\Controller\\VideoController::updateStatus'], ['status', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        110 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        131 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        156 => [[['_route' => 'dashboard_category', '_controller' => 'App\\Controller\\VideoController::showShoesByStatus'], ['category_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        193 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
