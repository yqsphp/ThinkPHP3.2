<?php
// 应用入口文件
//echo $_GET['echostr'];exit;
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
// 定义项目名称
define('APP_NAME','Application');
// 定义应用目录
define('APP_PATH',APP_NAME.'/');
// 定义缓存目录
define('RUNTIME_PATH','./Runtime/');
//静态缓存目录
define('HTML_PATH', RUNTIME_PATH . '/Html/');
//生成lite.php文件
define('BUILD_LITE_FILE',true);
// 定义公共目录
define('PUBLIC_PATH','/Public/');
// 引入ThinkPHP入口文件
//生产模式使用
require './ThinkPHP/ThinkPHP.php';