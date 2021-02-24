<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(isset($_POST['angka1'])){
			$this->hitung($_POST['angka1'],$_POST['angka2'],$_POST['operasi']);
		}else{
			$this->load->view('welcome_message');
		}
	}
	public function hitung($a1,$a2,$t)
	{
		switch($t){
			case "+":
				$nilai = $a1 + $a2;
				break;
			case "-":	
				$nilai = $a1 - $a2;
				break;
			case "*":
				$nilai = $a1 * $a2;
				break;
			case "/":	
				$nilai = $a1 / $a2;
				break;
			default:
				$nilai = $a1 + $a2;
				break;
		}
		$hasil['operasi']=$t;
		$hasil['has']=$nilai;
		$hasil['n1']=$a1;
		$hasil['n2']=$a2;
		$this->load->view('hitung', $hasil);
	}
}
