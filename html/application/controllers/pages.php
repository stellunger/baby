<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index()
	{
	
		$data['page_title'] = 'Главная страница | Малышок.ру';

		$this->load->view('header', $data);
		$this->load->view('main-page');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		
		switch ($page_id)
		{
			case 'transformer':
				$data['page_title'] = 'Костюм-транформер';
				break;

			case 'contacts':
				$data['page_title'] = 'Наши контакты';
				break;
		}

		$data['page_title'] .= ' | Малышок.ру';

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('footer');
	}
}

