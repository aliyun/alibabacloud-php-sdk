<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\relatedPrice\marketplaceImagePrice;

class relatedPrice extends Model
{
    /**
     * @var marketplaceImagePrice
     */
    public $marketplaceImagePrice;
    protected $_name = [
        'marketplaceImagePrice' => 'MarketplaceImagePrice',
    ];

    public function validate()
    {
        if (null !== $this->marketplaceImagePrice) {
            $this->marketplaceImagePrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->marketplaceImagePrice) {
            $res['MarketplaceImagePrice'] = null !== $this->marketplaceImagePrice ? $this->marketplaceImagePrice->toArray($noStream) : $this->marketplaceImagePrice;
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
        if (isset($map['MarketplaceImagePrice'])) {
            $model->marketplaceImagePrice = marketplaceImagePrice::fromMap($map['MarketplaceImagePrice']);
        }

        return $model;
    }
}
