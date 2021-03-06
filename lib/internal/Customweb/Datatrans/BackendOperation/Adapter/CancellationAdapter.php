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
 */



/**
 *
 * @author Mathis Kappeler
 * @Bean
 *
 */
class Customweb_Datatrans_BackendOperation_Adapter_CancellationAdapter extends Customweb_Datatrans_AbstractMaintenanceAdapter implements Customweb_Payment_BackendOperation_Adapter_Service_ICancel{

	public function cancel(Customweb_Payment_Authorization_ITransaction $transaction) {
		$transaction->cancelDry();
		
		$xmlRequestBuilder = new Customweb_Datatrans_BackendOperation_Adapter_CancellationRequestBuilder($transaction, $this->getConfiguration());
		$response = Customweb_Datatrans_Util::sendXmlRequest($this->getConfiguration()->getXmlProcessorUrl(), $xmlRequestBuilder->buildRequest());

		$this->checkResponseForErrors($response);

		// In all other cases everything works and we can cancel the transaction
		$transaction->cancel();
	}
}