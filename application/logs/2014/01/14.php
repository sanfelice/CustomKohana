<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-14 15:26:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function curl_initt() ~ APPPATH\views\indextpl.php [ 9 ] in file:line
2014-01-14 15:26:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 15:26:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function curl_initt() ~ APPPATH\views\indextpl.php [ 9 ] in file:line
2014-01-14 15:26:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 15:30:26 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\indextpl.php [ 23 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:23
2014-01-14 15:30:26 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(23): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\Apache24\htd...', 23, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:23
2014-01-14 15:40:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tdb ~ APPPATH\views\indextpl.php [ 40 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:40:27 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 40, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:40:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tdb ~ APPPATH\views\indextpl.php [ 40 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:40:48 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 40, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:40:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tdb ~ APPPATH\views\indextpl.php [ 40 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:40:55 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 40, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:41:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tdb ~ APPPATH\views\indextpl.php [ 40 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:41:21 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 40, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:41:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tdb ~ APPPATH\views\indextpl.php [ 40 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:41:36 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 40, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:40
2014-01-14 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ xdebug://debug-eval [ 1 ] in file:line
2014-01-14 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 15:47:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\views\indextpl.php [ 10 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:10
2014-01-14 15:47:52 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 10, Array)
#1 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(41): parseMol(Array)
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:10
2014-01-14 15:51:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\views\indextpl.php [ 10 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:10
2014-01-14 15:51:15 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 10, Array)
#1 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(41): parseMol(Array)
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:10
2014-01-14 16:06:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\views\indextpl.php [ 37 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:37
2014-01-14 16:06:25 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 37, Array)
#1 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(68): parseMol(Array)
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:37
2014-01-14 16:15:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\views\indextpl.php [ 37 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:37
2014-01-14 16:15:33 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 37, Array)
#1 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(68): parseMol(Array)
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:37
2014-01-14 16:18:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: attributes ~ APPPATH\views\indextpl.php [ 68 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:68
2014-01-14 16:18:04 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 68, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:68
2014-01-14 16:21:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: atributes ~ APPPATH\views\indextpl.php [ 68 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:68
2014-01-14 16:21:36 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 68, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:68
2014-01-14 16:22:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: atributes ~ APPPATH\views\indextpl.php [ 68 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:68
2014-01-14 16:22:13 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 68, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:68
2014-01-14 17:26:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting function (T_FUNCTION) ~ APPPATH\classes\SpursPackage.php [ 11 ] in file:line
2014-01-14 17:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 17:27:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$MinVersion' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\SpursPackage.php [ 4 ] in file:line
2014-01-14 17:27:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 17:34:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\indextpl.php [ 47 ] in file:line
2014-01-14 17:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 17:34:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\indextpl.php [ 47 ] in file:line
2014-01-14 17:34:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 17:34:49 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\views\indextpl.php [ 41 ] in file:line
2014-01-14 17:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 17:34:55 --- CRITICAL: ErrorException [ 1 ]: Object of class SpursPackage could not be converted to string ~ APPPATH\views\indextpl.php [ 41 ] in file:line
2014-01-14 17:34:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-14 17:34:57 --- CRITICAL: ErrorException [ 1 ]: Object of class SpursPackage could not be converted to string ~ APPPATH\views\indextpl.php [ 41 ] in file:line
2014-01-14 17:34:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line