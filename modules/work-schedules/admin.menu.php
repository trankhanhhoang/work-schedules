<?php

/**
 * @Project WORK SCHEDULES 4.X
 * @Author PHAN TAN DUNG (phantandung92@gmail.com)
 * @Copyright (C) 2016 PHAN TAN DUNG. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 11 Jun 2016 23:45:51 GMT
 */

if (!defined('NV_ADMIN'))
    die('Stop!!!');

$submenu['config'] = $lang_module['config'];
$submenu['config-display'] = $lang_module['cfgDisplay'];

$allow_func = array('main', 'config', 'config-display');
