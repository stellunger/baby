<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index()
	{
	
		$data['page_title'] = 'Главная страница | Малышок-урал.рф';

		$this->load->view('header', $data);
		$this->load->view('main-page');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		
		switch ($page_id)
		{	
			case 'main-page':
				$data['page_title'] = 'Главная страница';
				break;
			case 'transformer':
				$data['page_title'] = 'Костюм-транформер для новорожденных';
				break;
			case 'boys':
				$data['page_title'] = 'Детский костюм для мальчиков';
				break;
			case 'boys-girls':
				$data['page_title'] = 'Детский костюм для мальчиков и девочек';
				break;
			case 'teens':
				$data['page_title'] = 'Костюм подростковый';
				break;
			case 'contacts':
				$data['page_title'] = 'Наши контакты';
				break;
		}

		$data['page_title'] .= ' | Малышок-урал.рф';

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('footer');
	}
}

