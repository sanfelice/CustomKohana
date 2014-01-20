<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template = 'indextpl';
	
	public function action_index()
	{
		$this->template->bind('content',$content);
		$content = '';
		
		// Load a view using the PDF extension
		$pdf = View_mPDF::factory('pdf/example');
		
		// Use the PDF as the request response
		
		//$this->request->body($pdf);
		$content = $pdf;
		
		// Force download
		//$pdf->download('brochure.pdf');		
		
		// Set the PDF footer (every page) using directly the MPDF object
		$pdf->get_mpdf()->SetHTMLFooter('<p>Footer disclaimer</p>');
		
		//$this->response->body('hello, world!');		
		/*$db = MangoDB::instance('teste', array("connect"=>TRUE));
		$db->find('teste');*/		
		
		/*$cli = new Mongo();
		$db = $cli->selectDB("teste");				
		$a = $db->selectCollection("teste");
		$cur = $a->find();*/		
		/*$db = MangoDB::instance('default');
		$db->connect();			
		//$db->create_collection("bdTeste1");
		$db->insert("bdTeste1", array("a"=>1, "b"=>2));
		$return = $db->find("bdTeste1", array("a"));	*/
		// creating account
		
		
		/*$account = Mango::factory('account',array(
			'name' => 'testaccount'
		))->create();

		//echo Debug::vars($account->some_counter); exit;

		$content .= Debug::vars($account->as_array());

		// atomic update
		$account->name = 'name2';
		$account->some_counter->increment(5);
		$account->update();

		$content .= Debug::vars($account->as_array());

		// another update
		$account->some_counter->increment();
		$account->update();

		$content .= Debug::vars($account->as_array());*/

		//$account->delete();

		/*$obj = new Model_TesteORM();
		$a = $obj->where('nome', '=', 'Adaiane')->find_all();
		$content .= '<pre>';
		foreach ($a as $aa){				
			$content .= var_dump($aa).'<br>';
		}*/
		
		//$content = "";
		
	}

} // End Welcome
