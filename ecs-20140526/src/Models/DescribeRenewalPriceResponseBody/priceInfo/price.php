<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo\price\detailInfos;
use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @description The currency unit.
     *
     * Alibaba Cloud International site (alibabacloud.com): USD.
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description Details about the resource prices.
     *
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
     * @description The transaction price, which is equal to the original price minus the discount.
     *
     * @example 3712.8
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'      => 'Currency',
        'detailInfos'   => 'DetailInfos',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'tradePrice'    => 'TradePrice',
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
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
