<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/annonce' => [[['_route' => 'app_annonce_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonce/new' => [[['_route' => 'app_annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/annonce/([^/]++)(?'
                    .'|(*:62)'
                    .'|/edit(*:74)'
                    .'|(*:81)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'app_annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [
            [['_route' => 'app_annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
