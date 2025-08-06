<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos;

class price extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var detailInfos
     */
    public $detailInfos;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $reservedInstanceHourPrice;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency' => 'Currency',
        'detailInfos' => 'DetailInfos',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'reservedInstanceHourPrice' => 'ReservedInstanceHourPrice',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (null !== $this->detailInfos) {
            $this->detailInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->detailInfos) {
            $res['DetailInfos'] = null !== $this->detailInfos ? $this->detailInfos->toArray($noStream) : $this->detailInfos;
        }

        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->reservedInstanceHourPrice) {
            $res['ReservedInstanceHourPrice'] = $this->reservedInstanceHourPrice;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DetailInfos'])) {
            $model->detailInfos = detailInfos::fromMap($map['DetailInfos']);
        }

        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['ReservedInstanceHourPrice'])) {
            $model->reservedInstanceHourPrice = $map['ReservedInstanceHourPrice'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
