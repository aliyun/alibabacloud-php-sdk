<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos;
use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @description The currency unit.
     *
     * Alibaba Cloud International site (alibabacloud.com): USD
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description Details about the price.
     *
     * > This parameter is in invitational preview and unavailable.
     * @var detailInfos
     */
    public $detailInfos;

    /**
     * @description The discount.
     *
     * @example 655.2
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description The original price.
     *
     * @example 4368
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The hourly price of the reserved instance for which the No Upfront or Partial Upfront payment option is used.
     *
     * @example 1
     *
     * @var float
     */
    public $reservedInstanceHourPrice;

    /**
     * @description The transaction price, which is equal to the original price minus the discount.
     *
     * @example 3712.8
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'                  => 'Currency',
        'detailInfos'               => 'DetailInfos',
        'discountPrice'             => 'DiscountPrice',
        'originalPrice'             => 'OriginalPrice',
        'reservedInstanceHourPrice' => 'ReservedInstanceHourPrice',
        'tradePrice'                => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->detailInfos) {
            $res['DetailInfos'] = null !== $this->detailInfos ? $this->detailInfos->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return price
     */
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
