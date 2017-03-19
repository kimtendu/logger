<?php
/**
 * Created by PhpStorm.
 * User: levi.kim
 * Date: 19/03/2017
 * Time: 15:41
 */
namespace logger;
class Logger {
	//public $file = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/woow/logger/logger.txt';

	public static function addLogs($insigth) {
		$currentFileContnt = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/woow/logger/logger.txt');

		$currentFileContnt .=JSON_encode($insigth)."\n";
		file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/woow/logger/logger.txt', $currentFileContnt);

	}
}

#\logger\Logger::addlogs('new one');