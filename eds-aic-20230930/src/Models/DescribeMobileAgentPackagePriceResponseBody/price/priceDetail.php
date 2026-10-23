<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMobileAgentPackagePriceResponseBody\price;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMobileAgentPackagePriceResponseBody\price\priceDetail\modulePrice;

class priceDetail extends Model
{
    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var modulePrice[]
     */
    public $modulePrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'modulePrice' => 'ModulePrice',
        'originalPrice' => 'OriginalPrice',
        'resourceType' => 'ResourceType',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->modulePrice)) {
            Model::validateArray($this->modulePrice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->modulePrice) {
            if (\is_array($this->modulePrice)) {
                $res['ModulePrice'] = [];
                $n1 = 0;
                foreach ($this->modulePrice as $item1) {
                    $res['ModulePrice'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['ModulePrice'])) {
            if (!empty($map['ModulePrice'])) {
                $model->modulePrice = [];
                $n1 = 0;
                foreach ($map['ModulePrice'] as $item1) {
                    $model->modulePrice[$n1] = modulePrice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
