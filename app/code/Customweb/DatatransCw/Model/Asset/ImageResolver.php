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

namespace Customweb\DatatransCw\Model\Asset;

class ImageResolver extends \Customweb\DatatransCw\Model\Asset\StaticResolver
{
	/**
	 * @param \Magento\Framework\Filesystem $filesystem
	 * @param \Magento\Framework\View\Asset\Repository $assetRepository
	 * @param \Magento\Framework\App\View\Asset\Publisher $assetPublisher
	 */
	public function __construct(
			\Magento\Framework\Filesystem $filesystem,
			\Magento\Framework\View\Asset\Repository $assetRepository,
			\Magento\Framework\App\View\Asset\Publisher $assetPublisher
	) {
		parent::__construct($filesystem, $assetRepository, $assetPublisher, 'images/assets');
	}
}