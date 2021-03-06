<?php
namespace WeltPixel\CategoryPage\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\SourceInterface;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class LabelPosition
 * @package WeltPixel\NavigationLinks\Model\Attribute\Source
 */
class AnimationType implements SourceInterface, OptionSourceInterface
{

    /**
     * block type
     */
    const NONE  = 'none';
    const ZOOM_ITEM  = 'zoom-item';
    const ZOOM_IMAGE  = 'zoom-image';

    /**
     * Prepare display options.
     *
     * @return array
     */
    public function getAvailableModes()
    {
        return [
            self::NONE => __('None'),
            self::ZOOM_ITEM => __('Zoom Item'),
            self::ZOOM_IMAGE => __('Zoom Image')
        ];
    }

    /**
     * Retrieve All options
     *
     * @return array
     */
    public function getAllOptions()
    {
        $result = [];

        foreach ($this->getAvailableModes() as $index => $value) {
            $result[] = ['value' => $index, 'label' => $value];
        }

        return $result;
    }

    /**
     * Retrieve Option value text
     *
     * @param string $value
     * @return mixed
     */
    public function getOptionText($value)
    {
        $options = $this->getAvailableModes();

        return isset($options[$value]) ? $options[$value] : null;
    }

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return $this->getAllOptions();
    }
}
