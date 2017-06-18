@echo off

rem -------------------------------------------------------------
rem  Yii command line bootstrap script for Windows.
rem
rem  @author Qiang Xue <qiang.xue@gmail.com>
rem  @link http://www.yiiframework.com/
rem  @copyright Copyright (c) 2008 Yii Software LLC
rem  @license http://www.yiiframework.com/license/
rem -------------------------------------------------------------

@setlocal

set YII_PATH=%~dp0

//дописано PHP_COMMAND=D://xampp/php/php.exe
//вместо PHP_COMMAND=php.exe

if "%PHP_COMMAND%" == "" set PHP_COMMAND=D://xampp/php/php.exe

"%PHP_COMMAND%" "%YII_PATH%yii" %*

@endlocal
