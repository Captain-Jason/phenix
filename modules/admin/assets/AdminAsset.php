<?php

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $baseUrl = '@web';
    public $sourcePath = '@admin/assets';

    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700', // Font CSS (Via CDN)
        'vendor/plugins/fullcalendar/fullcalendar.min.css',
        'skin/default_skin/css/theme.css',
        'admin-tools/admin-forms/css/admin-forms.min.css'
    ];
    public $js = [
        // jQuery
        'vendor/jquery/jquery-1.11.1.min.js',
        'vendor/jquery/jquery_ui/jquery-ui.min.js',
        // HighCharts Plugin
        'vendor/plugins/highcharts/highcharts.js',
        // JvectorMap Plugin + US Map (more maps in plugin/assets folder)
        'vendor/plugins/jvectormap/jquery.jvectormap.min.js',
        'vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js',
        // FullCalendar Plugin + moment Dependency
        'vendor/plugins/fullcalendar/lib/moment.min.js',
        'vendor/plugins/fullcalendar/fullcalendar.min.js',
        // Theme Javascript
        'js/utility/utility.js',
        'js/demo/demo.js',
        'js/main.js',
        // Widget Javascript
        'js/demo/widgets.js',
    ];
}




