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
			case 'transformer-costume-newborn':
				$data['page_title'] = 'Костюм-транформер для новорожденных';
				break;
			case 'boys-girls-child-costume-size-26-28-30-32':
				$data['page_title'] = 'Детский костюм для мальчиков и девочек размеры 26-28-30-32';
				break;
			case 'boys-girls-child-costume-size-20-22-24':
				$data['page_title'] = 'Детский костюм для мальчиков и девочек размеры 20-22-24';
				break;
			case 'boys-girls-teen-costume-size-32-34-36':
				$data['page_title'] = 'Подростковый костюм для мальчиков и девочек размеры 32-34-36';
				break;
			case 'girls-teen-coat-size-32-34-36':
				$data['page_title'] = 'Подростковый плащ для девочек размеры 32-34-36';
				break;
			case 'boys-teen-jacket-size-32-34-36':
				$data['page_title'] = 'Подростковая куртка для мальчиков размеры 32-34-36';
				break;
			case 'sale-girls-child-costume-size-22-24':
				$data['page_title'] = 'Распродажа: Детский костюм для девочек размеры 22-24';
				break;
			case 'sale-girls-child-costume-size-26-28-30':
				$data['page_title'] = 'Распродажа: Детский костюм для девочек размеры 26-28-30';
				break;
			case 'sale-boys-child-costume-size-22-24-26':
				$data['page_title'] = 'Распродажа: Детский костюм для мальчиков размеры 26-28-30';
				break;
			case 'sale-boys-child-costume-size-24-26-28-30':
				$data['page_title'] = 'Распродажа: Детский костюм для мальчиков размеры 24-26-28-30';
				break;
				case 'sale':
				$data['page_title'] = 'Распродажа';
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

