<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-17 16:52:10 --- CRITICAL: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH\classes\Kohana\Route.php [ 391 ] in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:10 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\bootstrap.php(148): Kohana_Route->filter('RESTful::route_...')
#1 C:\Apache24\htdocs\Mongo\index.php(102): require('C:\Apache24\htd...')
#2 {main} in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:54 --- CRITICAL: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH\classes\Kohana\Route.php [ 391 ] in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:54 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\bootstrap.php(148): Kohana_Route->filter('RESTful::route_...')
#1 C:\Apache24\htdocs\Mongo\index.php(102): require('C:\Apache24\htd...')
#2 {main} in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:55 --- CRITICAL: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH\classes\Kohana\Route.php [ 391 ] in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:55 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\bootstrap.php(148): Kohana_Route->filter('RESTful::route_...')
#1 C:\Apache24\htdocs\Mongo\index.php(102): require('C:\Apache24\htd...')
#2 {main} in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:55 --- CRITICAL: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH\classes\Kohana\Route.php [ 391 ] in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:55 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\bootstrap.php(148): Kohana_Route->filter('RESTful::route_...')
#1 C:\Apache24\htdocs\Mongo\index.php(102): require('C:\Apache24\htd...')
#2 {main} in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:56 --- CRITICAL: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH\classes\Kohana\Route.php [ 391 ] in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:52:56 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\bootstrap.php(148): Kohana_Route->filter('RESTful::route_...')
#1 C:\Apache24\htdocs\Mongo\index.php(102): require('C:\Apache24\htd...')
#2 {main} in C:\Apache24\htdocs\Mongo\application\bootstrap.php:148
2014-01-17 16:53:11 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:53:11 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:53:33 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:53:33 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:54:40 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:54:40 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:54:41 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:54:41 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:54:42 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 16:54:42 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:03:25 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:03:25 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:03:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\views\indextpl.php [ 18 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:03:53 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 18, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:04:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\views\indextpl.php [ 18 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:04:01 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 18, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:04:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\views\indextpl.php [ 18 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:04:05 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 18, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:04:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\views\indextpl.php [ 18 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:04:41 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 18, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:18
2014-01-17 17:06:00 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:06:00 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:26:08 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:26:08 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:26:15 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:26:15 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:26:22 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:26:22 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:05 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:05 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:06 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:06 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:06 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:06 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:06 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:06 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:07 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:14 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:14 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:28:33 --- CRITICAL: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH\classes\Kohana\Route.php [ 391 ] in C:\Apache24\htdocs\Mongo\application\bootstrap.php:143
2014-01-17 17:28:33 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\bootstrap.php(143): Kohana_Route->filter('RESTful::route_...')
#1 C:\Apache24\htdocs\Mongo\index.php(102): require('C:\Apache24\htd...')
#2 {main} in C:\Apache24\htdocs\Mongo\application\bootstrap.php:143
2014-01-17 17:29:12 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:29:12 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:29:15 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:29:15 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:29:24 --- CRITICAL: ErrorException [ 500 ]: Undefined property: Controller_Api::$_response_types ~ MODPATH\restful\classes\RESTful\Controller.php [ 165 ] in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165
2014-01-17 17:29:24 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php(165): RESTful_Core::error_handler(8, 'Undefined prope...', 'C:\Apache24\htd...', 165, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(69): RESTful_Controller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\modules\restful\classes\RESTful\Controller.php:165