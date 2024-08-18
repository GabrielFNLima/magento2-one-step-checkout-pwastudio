<?php
declare(strict_types=1);

namespace GFNL\CheckoutPWAStudio\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Layouts implements OptionSourceInterface
{
    public function toOptionArray(): array
    {
        return [
            [
                'value' => '3columns',
                'label' => __('3 Columns')
            ],
            [
                'value' => '2columns',
                'label' => __('2 Columns')
            ],
            [
                'value' => '1column',
                'label' => __('1 Column')
            ]
        ];
    }
}
