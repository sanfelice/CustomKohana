<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-20 10:52:57 --- CRITICAL: ErrorException [ 8192 ]: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 66 ] in file:line
2014-01-20 10:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'preg_replace():...', 'C:\Apache24\htd...', 66, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(66): preg_replace('/\&\#([0-9]+)\;...', 'code2utf('\1',0...', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:00:47 --- CRITICAL: ErrorException [ 8192 ]: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 66 ] in file:line
2014-01-20 11:00:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'preg_replace():...', 'C:\Apache24\htd...', 66, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(66): preg_replace('/\#([0-9]+)\;/m...', 'code2utf('\1',0...', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:09:23 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, '', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 69 ] in file:line
2014-01-20 11:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 69, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(69): preg_replace_callback('/\&\#([0-9]+)\;...', '', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:09:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php(69) : runtime-created function [ 1 ] in file:line
2014-01-20 11:09:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:09:53 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, '', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 69 ] in file:line
2014-01-20 11:09:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 69, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(69): preg_replace_callback('/\&\#([0-9]+)\;...', '', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:09:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php(69) : runtime-created function [ 1 ] in file:line
2014-01-20 11:09:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:11:01 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, '', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 69 ] in file:line
2014-01-20 11:11:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 69, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(69): preg_replace_callback('/\&\#([0-9]+)\;...', '', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:11:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '&' or variable (T_VARIABLE) ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php(69) : runtime-created function [ 1 ] in file:line
2014-01-20 11:11:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:12:25 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, '', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 69 ] in file:line
2014-01-20 11:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 69, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(69): preg_replace_callback('/\&\#([0-9]+)\;...', '', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:12:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php(69) : runtime-created function [ 1 ] in file:line
2014-01-20 11:12:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:14:13 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, '', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 76 ] in file:line
2014-01-20 11:14:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 76, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(76): preg_replace_callback('/\&\#x([0-9a-fA...', '', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:14:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php(76) : runtime-created function [ 1 ] in file:line
2014-01-20 11:14:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:15:58 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, 'preg_callback(1, $matches, $lo)', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 73 ] in file:line
2014-01-20 11:15:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 73, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(73): preg_replace_callback('/\&\#([0-9]+)\;...', 'preg_callback(1...', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:17:17 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, '', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 76 ] in file:line
2014-01-20 11:17:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 76, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(76): preg_replace_callback('/\&\#x([0-9a-fA...', '', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:17:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php(76) : runtime-created function [ 1 ] in file:line
2014-01-20 11:17:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:25:17 --- CRITICAL: ErrorException [ 2 ]: preg_replace_callback(): Requires argument 2, '', to be a valid callback ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php [ 76 ] in file:line
2014-01-20 11:25:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace_ca...', 'C:\Apache24\htd...', 76, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\includes\functions.php(76): preg_replace_callback('/\&\#x([0-9a-fA...', '', '<div style="wid...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(30886): strcode2utf('<div style="wid...', false)
#3 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(12343): mPDF->purify_utf8('<div style="wid...', false)
#4 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(56): mPDF->WriteHTML('<div style="wid...')
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-01-20 11:25:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\mpdf\vendor\mpdf\includes\functions.php(76) : runtime-created function [ 1 ] in file:line
2014-01-20 11:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:26:46 --- CRITICAL: ErrorException [ 2 ]: unlink(C:/Apache24/htdocs/Mongo/modules/mpdf/vendor/mpdf/tmp/dummy.txt): Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7135 ] in file:line
2014-01-20 11:26:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:/Apach...', 'C:\Apache24\htd...', 7135, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(7135): unlink('C:/Apache24/htd...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(58): mPDF->Output('brochure.pdf', 'D')
#3 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-01-20 11:26:52 --- CRITICAL: ErrorException [ 2 ]: unlink(C:/Apache24/htdocs/Mongo/modules/mpdf/vendor/mpdf/tmp/dummy.txt): Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7135 ] in file:line
2014-01-20 11:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:/Apach...', 'C:\Apache24\htd...', 7135, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(7135): unlink('C:/Apache24/htd...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(58): mPDF->Output('brochure.pdf', 'D')
#3 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-01-20 11:27:09 --- CRITICAL: ErrorException [ 2 ]: unlink(C:/Apache24/htdocs/Mongo/modules/mpdf/vendor/mpdf/tmp/dummy.txt): Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7135 ] in file:line
2014-01-20 11:27:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:/Apach...', 'C:\Apache24\htd...', 7135, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(7135): unlink('C:/Apache24/htd...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(58): mPDF->Output('brochure.pdf', 'D')
#3 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-01-20 11:28:53 --- CRITICAL: ErrorException [ 2 ]: unlink(C:/Apache24/htdocs/Mongo/modules/mpdf/vendor/mpdf/tmp/dummy.txt): Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7135 ] in file:line
2014-01-20 11:28:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(C:/Apach...', 'C:\Apache24\htd...', 7135, Array)
#1 C:\Apache24\htdocs\Mongo\modules\mpdf\vendor\mpdf\mpdf.php(7135): unlink('C:/Apache24/htd...')
#2 C:\Apache24\htdocs\Mongo\modules\mpdf\classes\view\mpdf\core.php(58): mPDF->Output('brochure.pdf', 'D')
#3 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(20): View_mPDF_Core->download('brochure.pdf')
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-01-20 11:34:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in file:line
2014-01-20 11:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:35:25 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:35:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:36:24 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:36:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:37:49 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:37:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:38:06 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:38:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:39:03 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:39:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:40:13 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:40:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:42:28 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:42:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:42:30 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:42:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:42:38 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:43:33 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:43:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:45:55 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:45:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-20 11:46:06 --- CRITICAL: ErrorException [ 1 ]: Method View_mPDF::__toString() must not throw an exception ~ APPPATH\views\indextpl.php [ 0 ] in file:line
2014-01-20 11:46:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line