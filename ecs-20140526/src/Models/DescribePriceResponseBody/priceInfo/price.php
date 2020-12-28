<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos;
use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @var float
     */
    public $reservedInstanceHourPrice;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var detailInfos[]
     */
    public $detailInfos;

    /**
     * @var string
     */
    public $currency;
    protected $_name = [
        'reservedInstanceHourPrice' => 'ReservedInstanceHourPrice',
        'discountPrice'             => 'DiscountPrice',
        'tradePrice'                => 'TradePrice',
        'originalPrice'             => 'OriginalPrice',
        'detailInfos'               => 'DetailInfos',
        'currency'                  => 'Currency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceHourPrice) {
            $res['ReservedInstanceHourPrice'] = $this->reservedInstanceHourPrice;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->detailInfos) {
            $res['DetailInfos'] = [];
            if (null !== $this->detailInfos && \is_array($this->detailInfos)) {
                $n = 0;
                foreach ($this->detailInfos as $item) {
                    $res['DetailInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return price
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstanceHourPrice'])) {
            $model->reservedInstanceHourPrice = $map['ReservedInstanceHourPrice'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['DetailInfos'])) {
            if (!empty($map['DetailInfos'])) {
                $model->detailInfos = [];
                $n                  = 0;
                foreach ($map['DetailInfos'] as $item) {
                    $model->detailInfos[$n++] = null !== $item ? detailInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        return $model;
    }
}
