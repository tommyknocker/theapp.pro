<?php
/**
 * Main entry point. For cron/cli jobs too.
 * 
 * @author Tommyknocker <tommyknocker@theapp.pro>
 * @license http://www.gnu.org/licenses/lgpl.txt LGPLv3
 */
define('TIMER_START', microtime());
define('DS', DIRECTORY_SEPARATOR);

require_once 'data' . DS . 'constants.php';
require_once 'core' . DS . 'AppInit.php';

App::Event()->fire('system:execution_time', microtime() - TIMER_START);
