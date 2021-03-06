<?php
namespace Bloom\Bloom\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class FulfillType implements ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'authorize',
                'label' => __('No'),
            ],
            [
                'value' => 'authorize_capture',
                'label' => __('Yes')
            ]
        ];
    }

}
