<?php

/*
 * This file is part of Hifone.
 *
 * (c) Hifone.com <hifone@hifone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hifone\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;


use Illuminate\Support\Facades\Route;



/**
 * This is the dashboard routes class.
 */
class AdminCpRoutes
{
    /**
     * Define the dashboard routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        //$config = app_path('../config/administrator.php');

        $router->group(array('prefix' => 'admincp', 'middleware' => ['\Frozennode\Administrator\Http\Middleware\ValidateAdmin', 'web', 'auth']), function (Registrar $router)
        {

            //Admin Dashboard
            $router->get('/', array(
                'as' => 'admin_dashboard',
                'uses' => '\Frozennode\Administrator\AdminController@dashboard',
            ));

            //File Downloads
            $router->get('file_download', array(
                'as' => 'admin_file_download',
                'uses' => '\Frozennode\Administrator\AdminController@fileDownload',
            ));

            //Custom Pages
            $router->get('page/{page}', array(
                'as' => 'admin_page',
                'uses' => '\Frozennode\Administrator\AdminController@page',
            ));

            $router->group(array('middleware' => ['\Frozennode\Administrator\Http\Middleware\ValidateSettings', '\Frozennode\Administrator\Http\Middleware\PostValidate']), function (Registrar $router) {
                //Settings Pages
                $router->get('settings/{settings}', array(
                    'as' => 'admin_settings',
                    'uses' => '\Frozennode\Administrator\AdminController@settings',
                ));

                //Display a settings file
                $router->get('settings/{settings}/file', array(
                    'as' => 'admin_settings_display_file',
                    'uses' => '\Frozennode\Administrator\AdminController@displayFile',
                ));

                //Save Item
                $router->post('settings/{settings}/save', array(
                    'as' => 'admin_settings_save',
                    'uses' => '\Frozennode\Administrator\AdminController@settingsSave',
                ));

                //Custom Action
                $router->post('settings/{settings}/custom_action', array(
                    'as' => 'admin_settings_custom_action',
                    'uses' => '\Frozennode\Administrator\AdminController@settingsCustomAction',
                ));

                //Settings file upload
                $router->post('settings/{settings}/{field}/file_upload', array(
                    'as' => 'admin_settings_file_upload',
                    'uses' => '\Frozennode\Administrator\AdminController@fileUpload',
                ));
            });

            //Switch locales
            $router->get('switch_locale/{locale}', array(
                'as' => 'admin_switch_locale',
                'uses' => '\Frozennode\Administrator\AdminController@switchLocale',
            ));

            //The route group for all other requests needs to validate admin, model, and add assets
            $router->group(array('middleware' => ['\Frozennode\Administrator\Http\Middleware\ValidateModel', '\Frozennode\Administrator\Http\Middleware\PostValidate']), function (Registrar $router) {
                //Model Index
                $router->get('{model}', array(
                    'as' => 'admin_index',
                    'uses' => '\Frozennode\Administrator\AdminController@index',
                ));

                //New Item
                $router->get('{model}/new', array(
                    'as' => 'admin_new_item',
                    'uses' => '\Frozennode\Administrator\AdminController@item',
                ));

                //Update a relationship's items with constraints
                $router->post('{model}/update_options', array(
                    'as' => 'admin_update_options',
                    'uses' => '\Frozennode\Administrator\AdminController@updateOptions',
                ));

                //Display an image or file field's image or file
                $router->get('{model}/file', array(
                    'as' => 'admin_display_file',
                    'uses' => '\Frozennode\Administrator\AdminController@displayFile',
                ));

                //Updating Rows Per Page
                $router->post('{model}/rows_per_page', array(
                    'as' => 'admin_rows_per_page',
                    'uses' => '\Frozennode\Administrator\AdminController@rowsPerPage',
                ));

                //Get results
                $router->post('{model}/results', array(
                    'as' => 'admin_get_results',
                    'uses' => '\Frozennode\Administrator\AdminController@results',
                ));

                //Custom Model Action
                $router->post('{model}/custom_action', array(
                    'as' => 'admin_custom_model_action',
                    'uses' => '\Frozennode\Administrator\AdminController@customModelAction',
                ));

                //Get Item
                $router->get('{model}/{id}', array(
                    'as' => 'admin_get_item',
                    'uses' => '\Frozennode\Administrator\AdminController@item',
                ));

                //File Uploads
                $router->post('{model}/{field}/file_upload', array(
                    'as' => 'admin_file_upload',
                    'uses' => '\Frozennode\Administrator\AdminController@fileUpload',
                ));

                //Save Item
                $router->post('{model}/{id?}/save', array(
                    'as' => 'admin_save_item',
                    'uses' => '\Frozennode\Administrator\AdminController@save',
                ));

                //Delete Item
                $router->post('{model}/{id}/delete', array(
                    'as' => 'admin_delete_item',
                    'uses' => '\Frozennode\Administrator\AdminController@delete',
                ));

                //Custom Item Action
                $router->post('{model}/{id}/custom_action', array(
                    'as' => 'admin_custom_model_item_action',
                    'uses' => '\Frozennode\Administrator\AdminController@customModelItemAction',
                ));

                //Batch Delete Item
                $router->post('{model}/batch_delete', array(
                    'as' => 'admin_batch_delete',
                    'uses' => '\Frozennode\Administrator\AdminController@batchDelete',
                ));

                $router->post('thread/{thread}/pin', 'ThreadController@pin');
            }); /*$router->group(array('middleware' => ['\Frozennode\Administrator\Http\Middleware\ValidateModel'*/



        }); /*Route:array('domain' => $config['domain'], 'prefix' => $config['uri'], 'middleware' => ['\Frozennode\Administrator\Http\Middleware\ValidateAdmin', 'web', 'auth']), function (Registrar $router) {*/
    }
}
