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

namespace Customweb\DatatransCw\Model;

/**
 * @method string getKeySpace()
 * @method \Customweb\DatatransCw\Model\Storage setKeySpace(string $value)
 * @method string getKeyName()
 * @method \Customweb\DatatransCw\Model\Storage setKeyName(string $value)
 * @method string getKeyValue()
 * @method \Customweb\DatatransCw\Model\Storage setKeyValue(string $value)
 */
class Storage extends \Magento\Framework\Model\AbstractModel
{
	/**
	 * Event prefix
	 *
	 * @var string
	 */
	protected $_eventPrefix = 'customweb_datatranscw_storage';

	/**
	 * Event object
	 *
	 * @var string
	 */
	protected $_eventObject = 'storage';

    protected function _construct()
    {
        $this->_init('Customweb\DatatransCw\Model\ResourceModel\Storage');
    }

    /**
     * Load storage entry by its space and key
     *
     * @param string $space
     * @param string $key
     * @return $this
     */
    public function loadBySpaceAndKey($space, $key)
    {
    	$this->getResource()->loadBySpaceAndKey($this, $space, $key);
    	return $this;
    }
}