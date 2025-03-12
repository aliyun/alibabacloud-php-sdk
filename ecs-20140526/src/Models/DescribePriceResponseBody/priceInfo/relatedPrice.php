<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\relatedPrice\marketplaceImagePrice;
use AlibabaCloud\Tea\Model;

class relatedPrice extends Model
{
    /**
     * @description The Alibaba Cloud Marketplace image price.
     *
     * @var marketplaceImagePrice
     */
    public $marketplaceImagePrice;
    protected $_name = [
        'marketplaceImagePrice' => 'MarketplaceImagePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marketplaceImagePrice) {
            $res['MarketplaceImagePrice'] = null !== $this->marketplaceImagePrice ? $this->marketplaceImagePrice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarketplaceImagePrice'])) {
            $model->marketplaceImagePrice = marketplaceImagePrice::fromMap($map['MarketplaceImagePrice']);
        }

        return $model;
    }
}
