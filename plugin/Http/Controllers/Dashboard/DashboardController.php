<?php

namespace WPXCronManagerLight\Http\Controllers\Dashboard;

use WPXCronManagerLight\Http\Controllers\Controller;
use WPXCronManagerLight\PureCSSSwitch\PureCSSSwitchProvider;

class DashboardController extends Controller
{
  public function load()
  {
    $args = [
      'label' => 'Items number',
      'default' => 5,
      'option' => 'wp_cron_manager_per_page',
    ];

    add_screen_option('per_page', $args);

    global $wp_cron_manager_list_table;

    $wp_cron_manager_list_table = new CronListTable();
  }

  public function index()
  {
    PureCSSSwitchProvider::enqueueStyles();

    $table = new CronListTable();

    return WPXCronManagerLight()
      ->view('dashboard.index')
      ->withAdminScripts('wpxcm-main')
      ->withAdminStyles('wpxcm')
      ->with('table', $table);
  }
}
