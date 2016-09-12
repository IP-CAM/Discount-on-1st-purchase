<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
class ControllerModuleDiscountOn1stPurchase extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('module/discount_on_1st_purchase');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('discount_on_1st_purchase', $this->request->post);
			$q="select count(*) as total from ". DB_PREFIX . "extension WHERE type='total' and code='discount_on_1st_purchase'";
			$query = $this->db->query($q);
			if(!$query->row['total'])
			{ 
				$q="insert into ". DB_PREFIX . "extension values('','total','discount_on_1st_purchase')";
				$this->db->query($q);
			}
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
	
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_module_publish_date'] = $this->language->get('entry_module_publish_date');
		$data['entry_module_end_date'] = $this->language->get('entry_module_end_date');
		$data['entry_discount'] = $this->language->get('entry_discount');
		$data['entry_minimum_total'] = $this->language->get('entry_minimum_total');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->error['discount_on_1st_purchase_discount'])) {
			$data['error_discount_on_1st_purchase_discount'] = $this->error['discount_on_1st_purchase_discount'];
		} else {
			$data['error_discount_on_1st_purchase_discount'] = '';
		}
		
		if (isset($this->error['discount_on_1st_purchase_module_publish_date'])) {
			$data['error_discount_on_1st_purchase_module_publish_date'] = $this->error['discount_on_1st_purchase_module_publish_date'];
		} else {
			$data['error_discount_on_1st_purchase_module_publish_date'] = '';
		}
		
		if (isset($this->error['discount_on_1st_purchase_minimum_total'])) {
			$data['error_discount_on_1st_purchase_minimum_total'] = $this->error['discount_on_1st_purchase_minimum_total'];
		} else {
			$data['error_discount_on_1st_purchase_minimum_total'] = '';
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('module/discount_on_1st_purchase', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['action'] = $this->url->link('module/discount_on_1st_purchase', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

		if (isset($this->request->post['discount_on_1st_purchase_status'])) {
			$data['discount_on_1st_purchase_status'] = $this->request->post['discount_on_1st_purchase_status'];
		} else {
			$data['discount_on_1st_purchase_status'] = $this->config->get('discount_on_1st_purchase_status');
		}
		
		if (isset($this->request->post['discount_on_1st_purchase_module_publish_date'])) {
			$data['discount_on_1st_purchase_module_publish_date'] = $this->request->post['discount_on_1st_purchase_module_publish_date'];
		} else {
			$data['discount_on_1st_purchase_module_publish_date'] = $this->config->get('discount_on_1st_purchase_module_publish_date');
		}
		
		if (isset($this->request->post['discount_on_1st_purchase_module_end_date'])) {
			$data['discount_on_1st_purchase_module_end_date'] = $this->request->post['discount_on_1st_purchase_module_end_date'];
		} else {
			$data['discount_on_1st_purchase_module_end_date'] = $this->config->get('discount_on_1st_purchase_module_end_date');
		}
		
		if (isset($this->request->post['discount_on_1st_purchase_discount'])) {
			$data['discount_on_1st_purchase_discount'] = $this->request->post['discount_on_1st_purchase_discount'];
		} else {
			$data['discount_on_1st_purchase_discount'] = $this->config->get('discount_on_1st_purchase_discount');
		}
		
		if (isset($this->request->post['discount_on_1st_purchase_minimum_total'])) {
			$data['discount_on_1st_purchase_minimum_total'] = $this->request->post['discount_on_1st_purchase_minimum_total'];
		} else {
			$data['discount_on_1st_purchase_minimum_total'] = $this->config->get('discount_on_1st_purchase_minimum_total');
		}
		
		if (isset($this->request->post['discount_on_1st_purchase_sort_order'])) {
			$data['discount_on_1st_purchase_sort_order'] = $this->request->post['discount_on_1st_purchase_sort_order'];
		} else {
			$data['discount_on_1st_purchase_sort_order'] = $this->config->get('discount_on_1st_purchase_sort_order');
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('module/discount_on_1st_purchase.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/discount_on_1st_purchase')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		if (!$this->request->post['discount_on_1st_purchase_discount']) {
			$this->error['discount_on_1st_purchase_discount'] = $this->language->get('error_discount_on_1st_purchase_discount');
		}
		if (!$this->request->post['discount_on_1st_purchase_module_publish_date']) {
			$this->error['discount_on_1st_purchase_module_publish_date'] = $this->language->get('error_discount_on_1st_purchase_module_publish_date');
		}
		if (!$this->request->post['discount_on_1st_purchase_minimum_total']) {
			$this->error['discount_on_1st_purchase_minimum_total'] = $this->language->get('error_discount_on_1st_purchase_minimum_total');
		}
		return !$this->error;
	}
}
