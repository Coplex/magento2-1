<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Downloadable\Model\Source;

/**
 * TypeUpload source class
 */
class TypeUpload implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'file', 'label' => __('Upload File')],
            ['value' => 'url', 'label' => __('URL')],
        ];
    }
}
