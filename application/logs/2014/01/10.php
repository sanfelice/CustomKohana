<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-10 14:03:11 --- CRITICAL: ErrorException [ 1 ]: Call to protected Kohana_MangoDB::__construct() from context 'Controller_Welcome' ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2014-01-10 14:03:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 14:04:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: instances ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:8
2014-01-10 14:04:00 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 8, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:8
2014-01-10 14:04:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: instances ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:8
2014-01-10 14:04:01 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 8, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:8
2014-01-10 14:04:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: connection ~ APPPATH\classes\kohana\mangodb.php [ 82 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:82
2014-01-10 14:04:16 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 82, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('teste', Array)
#2 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(8): Kohana_MangoDB::instance('teste', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:82
2014-01-10 14:08:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: collection ~ APPPATH\classes\Controller\Welcome.php [ 13 ] in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:13
2014-01-10 14:08:50 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 13, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:13
2014-01-10 14:13:56 --- CRITICAL: ErrorException [ 2 ]: MongoCollection::__construct() expects exactly 2 parameters, 0 given ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2014-01-10 14:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'MongoCollection...', 'C:\Apache24\htd...', 10, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(10): MongoCollection->__construct()
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-10 14:16:12 --- CRITICAL: ErrorException [ 2 ]: MongoDB::__construct() expects exactly 2 parameters, 0 given ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in file:line
2014-01-10 14:16:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'MongoDB::__cons...', 'C:\Apache24\htd...', 11, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(11): MongoDB->__construct()
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-10 14:20:44 --- CRITICAL: MongoException [ 2 ]: MongoDB::__construct(): invalid name  ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:12
2014-01-10 14:20:44 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(12): MongoClient->selectDB('')
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:12
2014-01-10 14:36:39 --- CRITICAL: ErrorException [ 8192 ]: Mongo::__construct(): The 'timeout' option is deprecated. Please use 'connectTimeoutMS' instead ~ APPPATH\classes\kohana\mangodb.php [ 92 ] in file:line
2014-01-10 14:36:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Mongo::__constr...', 'C:\Apache24\htd...', 92, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(92): Mongo->__construct('mongodb://local...', Array)
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(15): Kohana_MangoDB::instance('default')
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-01-10 14:37:43 --- CRITICAL: ErrorException [ 8192 ]: Mongo::__construct(): The 'timeout' option is deprecated. Please use 'connectTimeoutMS' instead ~ APPPATH\classes\kohana\mangodb.php [ 92 ] in file:line
2014-01-10 14:37:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Mongo::__constr...', 'C:\Apache24\htd...', 92, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(92): Mongo->__construct('mongodb://local...', Array)
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(15): Kohana_MangoDB::instance('default')
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-01-10 14:39:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in file:line
2014-01-10 14:39:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 14:39:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in file:line
2014-01-10 14:39:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 14:47:15 --- CRITICAL: ErrorException [ 1 ]: Call to protected Kohana_MangoDB::__construct() from context 'Controller_Welcome' ~ APPPATH\classes\Controller\Welcome.php [ 15 ] in file:line
2014-01-10 14:47:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 14:48:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: connection ~ APPPATH\classes\kohana\mangodb.php [ 82 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:82
2014-01-10 14:48:08 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Apache24\htd...', 82, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#2 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(15): Kohana_MangoDB::instance('default', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:82
2014-01-10 15:00:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\kohana\mangodb.php [ 362 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:362
2014-01-10 15:00:35 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(362): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Apache24\htd...', 362, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(279): Kohana_MangoDB->_call('insert', Array, Array)
#2 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(18): Kohana_MangoDB->insert('teste_kohana', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#9 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:362
2014-01-10 15:08:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method MongoClient::createCollection() ~ APPPATH\classes\kohana\mangodb.php [ 388 ] in file:line
2014-01-10 15:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 15:16:35 --- CRITICAL: ErrorException [ 4096 ]: Object of class MongoCursor could not be converted to string ~ APPPATH\views\indextpl.php [ 6 ] in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:6
2014-01-10 15:16:35 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\views\indextpl.php(6): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Apache24\htd...', 6, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(61): include('C:\Apache24\htd...')
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Apache24\htd...', Array)
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Apache24\htdocs\Mongo\application\classes\Controller\welcometpl.php(31): Kohana_Controller_Template->after()
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(87): Controller_Welcometpl->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#11 {main} in C:\Apache24\htdocs\Mongo\application\views\indextpl.php:6
2014-01-10 15:34:29 --- CRITICAL: MongoException [ 2 ]: MongoDB::__construct(): invalid name  ~ APPPATH\classes\kohana\mangodb.php [ 120 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:34:29 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(120): MongoClient->selectDB('')
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(97): Kohana_MangoDB->connect()
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('demo', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(277): Kohana_MangoDB::instance('demo')
#4 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(985): Kohana_Mango->db()
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(25): Kohana_Mango->create()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo1()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:36:02 --- CRITICAL: MongoException [ 2 ]: MongoDB::__construct(): invalid name  ~ APPPATH\classes\kohana\mangodb.php [ 120 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:36:02 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(120): MongoClient->selectDB('')
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(97): Kohana_MangoDB->connect()
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('demo', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(277): Kohana_MangoDB::instance('demo')
#4 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(985): Kohana_Mango->db()
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(49): Kohana_Mango->create()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:36:18 --- CRITICAL: MongoException [ 2 ]: MongoDB::__construct(): invalid name  ~ APPPATH\classes\kohana\mangodb.php [ 120 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:36:18 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(120): MongoClient->selectDB('')
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(97): Kohana_MangoDB->connect()
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('demo', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(277): Kohana_MangoDB::instance('demo')
#4 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(985): Kohana_Mango->db()
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(107): Kohana_Mango->create()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo3()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:39:33 --- CRITICAL: MongoException [ 2 ]: MongoDB::__construct(): invalid name  ~ APPPATH\classes\kohana\mangodb.php [ 120 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:39:33 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(120): MongoClient->selectDB('')
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(97): Kohana_MangoDB->connect()
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('demo', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(277): Kohana_MangoDB::instance('demo')
#4 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(985): Kohana_Mango->db()
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(107): Kohana_Mango->create()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo3()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:120
2014-01-10 15:40:45 --- CRITICAL: MongoException [ 2 ]: MongoDB::__construct(): invalid name  ~ APPPATH\classes\kohana\mangodb.php [ 121 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:121
2014-01-10 15:40:45 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(121): MongoClient->selectDB('')
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(97): Kohana_MangoDB->connect()
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('demo', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(277): Kohana_MangoDB::instance('demo')
#4 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(985): Kohana_Mango->db()
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(107): Kohana_Mango->create()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo3()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:121
2014-01-10 15:40:46 --- CRITICAL: MongoException [ 2 ]: MongoDB::__construct(): invalid name  ~ APPPATH\classes\kohana\mangodb.php [ 121 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:121
2014-01-10 15:40:46 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(121): MongoClient->selectDB('')
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(97): Kohana_MangoDB->connect()
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php(56): Kohana_MangoDB->__construct('demo', Array)
#3 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(277): Kohana_MangoDB::instance('demo')
#4 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(985): Kohana_Mango->db()
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(107): Kohana_Mango->create()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo3()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mangodb.php:121
2014-01-10 15:41:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function selectCollection() on a non-object ~ APPPATH\classes\kohana\mangodb.php [ 380 ] in file:line
2014-01-10 15:41:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 15:43:51 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Mango::values() must be of the type array, object given, called in C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php on line 68 and defined ~ APPPATH\classes\kohana\mango.php [ 670 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:43:51 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(670): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Apache24\htd...', 670, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(68): Kohana_Mango->values(Object(Model_User))
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:25 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Mango::values() must be of the type array, object given, called in C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php on line 68 and defined ~ APPPATH\classes\kohana\mango.php [ 670 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:25 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(670): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Apache24\htd...', 670, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(68): Kohana_Mango->values(Object(Model_User))
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Mango::values() must be of the type array, object given, called in C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php on line 68 and defined ~ APPPATH\classes\kohana\mango.php [ 670 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:26 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(670): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Apache24\htd...', 670, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(68): Kohana_Mango->values(Object(Model_User))
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Mango::values() must be of the type array, object given, called in C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php on line 68 and defined ~ APPPATH\classes\kohana\mango.php [ 670 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:26 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(670): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Apache24\htd...', 670, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(68): Kohana_Mango->values(Object(Model_User))
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Mango::values() must be of the type array, object given, called in C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php on line 68 and defined ~ APPPATH\classes\kohana\mango.php [ 670 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:44:26 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(670): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Apache24\htd...', 670, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(68): Kohana_Mango->values(Object(Model_User))
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:45:48 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Mango::values() must be of the type array, object given, called in C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php on line 68 and defined ~ APPPATH\classes\kohana\mango.php [ 670 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:45:48 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(670): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Apache24\htd...', 670, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(68): Kohana_Mango->values(Object(Model_User))
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:45:49 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Mango::values() must be of the type array, object given, called in C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php on line 68 and defined ~ APPPATH\classes\kohana\mango.php [ 670 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:45:49 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(670): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Apache24\htd...', 670, Array)
#1 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(68): Kohana_Mango->values(Object(Model_User))
#2 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:670
2014-01-10 15:45:52 --- CRITICAL: ErrorException [ 4096 ]: Object of class Controller_Welcome could not be converted to string ~ APPPATH\classes\Controller\Welcome.php [ 23 ] in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:23
2014-01-10 15:45:52 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(23): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Apache24\htd...', 23, Array)
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:23
2014-01-10 15:59:04 --- CRITICAL: Mango_Exception [ 0 ]: account model does not have a field name ~ APPPATH\classes\kohana\mango.php [ 511 ] in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:35
2014-01-10 15:59:04 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(35): Kohana_Mango->__set('name', 'name2')
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:35
2014-01-10 16:00:02 --- CRITICAL: Mango_Exception [ 0 ]: account model does not have a field some_counter ~ APPPATH\classes\kohana\mango.php [ 442 ] in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:36
2014-01-10 16:00:02 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(36): Kohana_Mango->__get('some_counter')
#1 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php:36
2014-01-10 16:00:56 --- CRITICAL: MongoException [ 19 ]: Invalid object ID ~ APPPATH\classes\kohana\mango.php [ 1307 ] in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:1307
2014-01-10 16:00:56 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(1307): MongoId->__construct(12)
#1 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(468): Kohana_Mango->load_field('user_id', 12)
#2 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(684): Kohana_Mango->__set('user_id', 12)
#3 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(61): Kohana_Mango->values(Array, false)
#4 C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php(1150): Kohana_Mango::factory('blog', Array)
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\mangodemo.php(563): Kohana_Mango->check(Array)
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_MangoDemo->action_demo10()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_MangoDemo))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\application\classes\kohana\mango.php:1307
2014-01-10 16:13:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-01-10 16:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:14:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-01-10 16:14:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:15:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-01-10 16:15:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:18:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-01-10 16:18:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:18:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-01-10 16:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:18:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-01-10 16:18:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:20:03 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\Apache24\htdocs\Mongo\modules\database\classes\Kohana\Database\MySQL.php:171
2014-01-10 16:20:03 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\Apache24\htdocs\Mongo\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('teste')
#3 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(49): Kohana_ORM->__construct()
#7 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#13 {main} in C:\Apache24\htdocs\Mongo\modules\database\classes\Kohana\Database\MySQL.php:171
2014-01-10 16:22:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-01-10 16:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:24:24 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'clarorelatorionovo.teste' doesn't exist ( SHOW FULL COLUMNS FROM `teste` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 183 ] in C:\Apache24\htdocs\Mongo\modules\database\classes\Kohana\Database\MySQLi.php:350
2014-01-10 16:24:24 --- DEBUG: #0 C:\Apache24\htdocs\Mongo\modules\database\classes\Kohana\Database\MySQLi.php(350): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('teste')
#2 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\Apache24\htdocs\Mongo\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\Apache24\htdocs\Mongo\application\classes\Controller\Welcome.php(49): Kohana_ORM->__construct()
#6 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Apache24\htdocs\Mongo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\Apache24\htdocs\Mongo\index.php(118): Kohana_Request->execute()
#12 {main} in C:\Apache24\htdocs\Mongo\modules\database\classes\Kohana\Database\MySQLi.php:350
2014-01-10 16:28:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function mb_convert_encoding() ~ SYSPATH\classes\Kohana\UTF8.php [ 76 ] in file:line
2014-01-10 16:28:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-10 16:31:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::serialize() ~ APPPATH\classes\Controller\Welcome.php [ 51 ] in file:line
2014-01-10 16:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line