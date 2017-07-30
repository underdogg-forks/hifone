<?php

/*
 * This file is part of Hifone.
 *
 * (c) Hifone.com <hifone@hifone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Dashboard',
    'overview'  => 'Overview',

    'attentions' => [
        'attentions' => 'Attentions',
        'add'        => 'add',
    ],

    'content' => [
        'content' => 'Content',
    ],
    'pages' => [
        'pages'   => 'Page',
        'slug'    => 'Slug',
        'title'   => 'Title',
        'body'    => 'Content',
        'add'     => [
            'title'   => 'add',
            'success' => 'success.',
        ],
        'edit'     => [
            'title'   => 'edit',
            'success' => 'success.',
        ],
    ],
    'photos' => [
        'photos' => 'photos',
    ],
    'threads'  => [
        'threads' => 'threads',
        'add'     => [
            'title'   => 'add',
            'success' => 'success.',
        ],
        'edit' => [
            'title'   => 'edit',
            'success' => 'success.',
        ],
    ],
    'replies' => [
        'replies' => 'replies',
        'edit'    => [
            'title' => 'edit',
        ],
    ],

    'sections' => [
        'sections'     => 'sections',
        'name'         => 'name',
        'order'        => 'order',
        'add'          => [
            'title'   => 'add',
            'message' => 'message',
            'success' => 'success。',
            'failure' => 'failure！',
        ],
        'edit' => [
            'title'   => 'edit',
            'success' => 'success。',
            'failure' => 'failure！',
        ],
    ],
    'nodes' => [
        'nodes'        => 'nodes',
        'name'         => 'name',
        'parent'       => 'parent',
        'root'         => 'v',
        'status_name'  => 'status_name',
        'description'  => 'description',
        'icon'         => 'icon',
        'slug'         => 'Slug',
        'slug_help'    => 'slug_help',
        'add'          => [
            'title'   => 'add',
            'success' => 'success',
            'failure' => 'failure',
        ],
        'edit' => [
            'title'   => 'edit',
            'success' => 'success',
            'failure' => 'failure',
        ],

        'status'       => [
            0 => '0',
            1 => '1',
            2 => '2',
        ],
        // Node parents
        'parents' => [
            'parents'        => 'parents',
            'no_nodes'       => 'no_nodes',
            'add'            => [
                'title'   => 'add',
                'success' => 'Node group added.',
                'failure' => 'Something went wrong with the node group, please try again.',
            ],
            'edit' => [
                'title'   => 'edit',
                'success' => 'Node group updated.',
                'failure' => 'Something went wrong with the node group, please try again.',
            ],
            'delete' => [
                'success' => 'success',
                'failure' => 'The node group could not be deleted, please try again.',
            ],
        ],
    ],

    'adblocks' => [
        'adblocks' => '广告位类型',
        'name'     => '名称',
        'slug'     => '标识',
        'add'      => [
            'title'   => '添加广告位类型',
            'success' => '广告位类型添加成功.',
        ],
        'edit' => [
            'success' => '广告位类型信息更新成功.',
        ],
    ],
    'adspaces' => [
        'adspaces' => '广告位',
        'name'     => '名称',
        'position' => '位置标识',
        'route'    => '投放范围',
        'add'      => [
            'title'   => '添加广告位',
            'success' => '广告位添加成功.',
        ],
        'edit' => [
            'success' => '广告位信息更新成功.',
        ],
    ],

    'advertisements' => [
        'advertisements' => 'advertisements',
        'name'           => 'advertisements',
        'body'           => 'body',
        'add'            => [
            'title'   => 'add',
            'success' => 'success',
        ],
        'edit' => [
            'success' => 'success.',
        ],
    ],

    'tips' => [
        'tips'        => 'tips',
        'body'        => 'body',
        'status'      => 'status',
        'add'         => [
            'title'   => 'add',
            'success' => 'success',
            'message' => 'message',
        ],
        'edit' => [
            'title'   => 'edit',
            'success' => 'success',
        ],
        'delete' => [
            'success' => 'delete success',
            'failure' => 'The tip could not be deleted, please try again.',
        ],
    ],

    'locations' => [
        'locations'        => 'locations',
        'name'             => 'name',
        'add'              => [
            'title'   => 'add',
            'success' => 'success',
            'message' => 'message',
        ],
        'edit' => [
            'title'   => 'edit',
            'success' => 'success',
        ],
        'delete' => [
            'success' => 'success',
            'failure' => 'The location could not be deleted, please try again.',
        ],
    ],

    'users' => [
        'users'       => 'users',
        'user'        => ':email, user :date',
        'username'    => 'username',
        'email'       => 'email',
        'password'    => 'password',
        'description' => 'description',
        'add'         => [
            'title'   => 'add',
            'success' => 'success',
            'failure' => 'failure',
        ],
        'edit'     => [
            'title'   => 'edit',
            'success' => 'success',
        ],
    ],

    'links' => [
        'links'       => 'links',
        'title'       => 'title',
        'url'         => 'url',
        'cover'       => 'cover',
        'description' => 'description',
        'status'      => 'status',
        'add'         => [
            'title'   => 'add',
            'success' => 'success.',
            'message' => 'message',
        ],
        'edit' => [
            'title'   => 'edit',
            'success' => 'success',
        ],
        'delete' => [
            'success' => 'success',
            'failure' => 'The link could not be deleted, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'    => 'settings',
        'general'     => [
            'general'     => 'general',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'too-big :size',
            'site_name'   => 'site_name',
            'site_domain' => 'site_domain',
            'site_logo'   => 'site_logo logo',
            'site_cdn'    => 'CDN site_cdn',
            'site_about'  => 'site_about',
            'logo'        => 'logo',
            'logo_help'   => 'logo_help',
        ],
        'localization' => [
            'localization' => 'localization',
        ],
        'customization' => [
            'customization' => 'customization',
            'controller'    => 'Controller',
            'method'        => 'Method',
        ],
        'stylesheet' => [
            'stylesheet' => 'stylesheet',
            'custom_css' => 'custom_css',
        ],
        'theme' => [
            'theme'                   => 'theme',
            'background-color'        => 'Background Color',
            'background-fills'        => 'background-fills',
            'banner-background-color' => 'banner-background-color',
            'banner-padding'          => 'banner-padding',
            'fullwidth-banner'        => 'fullwidth-banner',
            'text-color'              => 'text-color',
            'dashboard-login'         => 'dashboard-login',
            'reds'                    => 'reds (reds)',
            'blues'                   => 'blues (blues)',
            'greens'                  => 'greens (greens)',
            'yellows'                 => 'yellows (yellows)',
            'oranges'                 => 'oranges (oranges)',
            'metrics'                 => 'metrics',
            'links'                   => 'links',
            'per_page'                => 'per_page',
        ],
        'aboutus' => [
            'aboutus'    => 'aboutus',
            'version'    => 'Hifone version',
            'php'        => 'php PHP',
            'webserver'  => 'webserver',
            'db'         => 'db',
            'cache'      => 'cache',
            'session'    => 'session',
            'team'       => 'team',
        ],
        'edit' => [
            'success' => 'success.',
            'failure' => 'Settings could not be saved.',
        ],
    ],

    // Sidebar footer
    'help'        => 'help',
    'home'        => 'home',
    'logout'      => 'logout',

];
