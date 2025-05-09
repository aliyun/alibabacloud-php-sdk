<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price\priceDetails;

use AlibabaCloud\Dara\Model;

class priceDetail extends Model
{
    /**
     * @var float
     */
    public $discountPrice;

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
        'originalPrice' => 'OriginalPrice',
        'resourceType' => 'ResourceType',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
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
