<?php
class GoogleAnalyticsAccount extends GoogleAnalyticsAppModel {
  
  public $useDbConfig = 'googleAnalytics';

  public function __construct() {
    
    App::import(array(
      'type' => 'File',
      'name' => 'GoogleAnalytics.GOOGLE_ANALYTICS_CONFIG',
      'file' => 'config'.DS.'google_analytics.php'
    ));

    App::import(array(
      'type' => 'File',
      'name' => 'GoogleAnalytics.GoogleAnalyticsSource',
      'file' => 'models'.DS.'datasources'.DS.'google_analytics_source.php'
    ));
    
    $config =& new GOOGLE_ANALYTICS_CONFIG();
    
    ConnectionManager::create('googleAnalytics', $config->googleAnalytics);

    parent::__construct();
  }
  
}