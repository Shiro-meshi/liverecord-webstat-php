<?php
/**
 * Require the library
 */
require 'PHPTail.php';
/**
 * Initilize a new instance of PHPTail
 * @var PHPTail
 */

$tail = new PHPTail(array(
    "Youtube_Log" => "~/record_log/mea_y2b.log",
    "Bilibili_Log" => "~/record_log/mea_bili.log",
    "TC_log" => "~/record_log/mea_tc.log",
    "TCpy_log" => "~/record_log/mea_tcpy.log",
));

/**
 * We're getting an AJAX call
 */
if(isset($_GET['ajax']))  {
    echo $tail->getNewLines($_GET['file'], $_GET['lastsize'], $_GET['grep'], $_GET['invert']);
    die();
}

/**
 * Regular GET/POST call, print out the GUI
 */
$tail->generateGUI();
