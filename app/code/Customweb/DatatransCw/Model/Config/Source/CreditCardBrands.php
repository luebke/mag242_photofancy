<?php
/**
 * You are allowed to use this API in your web application.
 *
 * Copyright (C) 2018 by customweb GmbH
 *
 * This program is licenced under the customweb software licence. With the
 * purchase or the installation of the software in your application you
 * accept the licence agreement. The allowed usage is outlined in the
 * customweb software licence which can be found under
 * http://www.sellxed.com/en/software-license-agreement
 *
 * Any modification or distribution is strictly forbidden. The license
 * grants you the installation in one application. For multiuse you will need
 * to purchase further licences at http://www.sellxed.com/shop.
 *
 * See the customweb software licence agreement for more details.
 *
 *
 * @category	Customweb
 * @package		Customweb_DatatransCw
 * 
 */

namespace Customweb\DatatransCw\Model\Config\Source;

class CreditCardBrands implements \Magento\Framework\Option\ArrayInterface
{
	/**
	 * @return array
	 */
	public function toOptionArray()
	{
		return [
			['value' => 'visa', 'label' => __('VISA')],
			['value' => 'mastercard', 'label' => __('MasterCard')],
			['value' => 'americanexpress', 'label' => __('American Express')],
			['value' => 'diners', 'label' => __('Diners Club')],
			['value' => 'dankort', 'label' => __('Dankort')],
			['value' => 'jcb', 'label' => __('JCB')],
			['value' => 'bonuscard', 'label' => __('Bonuscard')],
			['value' => 'maestrouk', 'label' => __('Maestro International')],
			['value' => 'myone', 'label' => __('myOne')],
			['value' => 'chinaunionpay', 'label' => __('China UnionPay')],
		];
	}
}
