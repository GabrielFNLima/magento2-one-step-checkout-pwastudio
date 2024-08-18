<?php

declare(strict_types=1);

namespace GFNL\CheckoutPWAStudio\Model\Resolver;

use GFNL\CheckoutPWAStudio\Model\Config;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Configs implements ResolverInterface
{

    private Config $config;

    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
              $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        return [
            'layouts'=>$this->config->getLayouts()
        ];
    }
}
