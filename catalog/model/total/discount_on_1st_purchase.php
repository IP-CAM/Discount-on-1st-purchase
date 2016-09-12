<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
class ModelTotalDiscountOn1stPurchase extends Model {
	public function getTotal(&$total_data, &$total, &$taxes) {
		$this->load->model('account/customer');

				
		$publish_date=$this->config->get('discount_on_1st_purchase_module_publish_date');
		$end_date=$this->config->get('discount_on_1st_purchase_module_end_date');
		$minimum_total=$this->config->get('discount_on_1st_purchase_minimum_total');
		$sub_total = $this->cart->getSubTotal();
		if(!$end_date) $end_date=date('Y-m-d');
		if (strtotime(date('Y-m-d'))>=strtotime($publish_date) and strtotime(date('Y-m-d'))<=strtotime($end_date) and $this->customer->isLogged() and $minimum_total<=$sub_total) {
			
			$q="select count(*) as total from ". DB_PREFIX . "order where customer_id='".$this->customer->getId()."' and order_status_id>0";
			$query=$this->db->query($q);
			if(!$query->row['total'])
			{
				$discount_percentage=str_replace('%','',$this->config->get('discount_on_1st_purchase_discount'));
				$this->load->language('total/discount_on_1st_purchase');
				

				if ($discount_percentage) {
					$discount_total = 0;
					
					foreach ($this->cart->getProducts() as $product) {
						$discount = 0;

							$discount = $product['total'] / 100 * $discount_percentage;
						
//var_dump($product);
							if ($product['tax_class_id']) {
								$tax_rates = $this->tax->getRates($product['total'] - ($product['total'] - $discount), $product['tax_class_id']);

								foreach ($tax_rates as $tax_rate) {
									if ($tax_rate['type'] == 'P') {
										$taxes[$tax_rate['tax_rate_id']] -= $tax_rate['amount'];
									}
								}
							}
							 $discount_total += $discount;
						
						}

						
					}

					

					// If discount greater than total
					if ($discount_total > $total) {
						$discount_total = $total;
					}
					$total_data[] = array(
						'code'       => 'discount_on_1st_purchase',
						'title'      => sprintf($this->language->get('text_discount_on_1st_purchase'),$discount_percentage),
						'value'      => -$discount_total,
						'sort_order' => $this->config->get('discount_on_1st_purchase_sort_order')
					);

					$total -= $discount_total;
				}
			}
		}
	}
