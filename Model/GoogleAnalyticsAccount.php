<?php

// App::uses('google_analytics.php', 'Config');
include_once APP . 'Config' . DS . 'google_analytics.php';

class GoogleAnalyticsAccount extends Model {
  
  public $useDbConfig = 'googleAnalytics';
  public $useTable = false;
  public $actsAs = array();

  public function __construct() {
    
    // App::import(array(
    //   'type' => 'File',
    //   'name' => 'Sweetlytics.GOOGLE_ANALYTICS_CONFIG',
    //   'file' => 'config'.DS.'google_analytics.php'
    // ));

    // App::import(array(
    //   'type' => 'File',
    //   'name' => 'Sweetlytics.GoogleAnalyticsSource',
    //   'file' => 'models'.DS.'datasources'.DS.'google_analytics_source.php'
    // ));
    
    $config =& new GOOGLE_ANALYTICS_CONFIG();
    
    ConnectionManager::create('googleAnalytics', $config->googleAnalytics);

    parent::__construct();
  }
  
}