<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\coupons;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\detailInfos;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\ruleIdSet;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\subOrders;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var coupons
     */
    public $coupons;

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
     * @var ruleIdSet
     */
    public $ruleIdSet;

    /**
     * @var float
     */
    public $spotInstanceTypeOriginalPrice;

    /**
     * @var float
     */
    public $spotInstanceTypePrice;

    /**
     * @var subOrders
     */
    public $subOrders;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'coupons'                       => 'Coupons',
        'currency'                      => 'Currency',
        'detailInfos'                   => 'DetailInfos',
        'discountPrice'                 => 'DiscountPrice',
        'originalPrice'                 => 'OriginalPrice',
        'ruleIdSet'                     => 'RuleIdSet',
        'spotInstanceTypeOriginalPrice' => 'SpotInstanceTypeOriginalPrice',
        'spotInstanceTypePrice'         => 'SpotInstanceTypePrice',
        'subOrders'                     => 'SubOrders',
        'tradePrice'                    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toMap() : null;
        }
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
        if (null !== $this->ruleIdSet) {
            $res['RuleIdSet'] = null !== $this->ruleIdSet ? $this->ruleIdSet->toMap() : null;
        }
        if (null !== $this->spotInstanceTypeOriginalPrice) {
            $res['SpotInstanceTypeOriginalPrice'] = $this->spotInstanceTypeOriginalPrice;
        }
        if (null !== $this->spotInstanceTypePrice) {
            $res['SpotInstanceTypePrice'] = $this->spotInstanceTypePrice;
        }
        if (null !== $this->subOrders) {
            $res['SubOrders'] = null !== $this->subOrders ? $this->subOrders->toMap() : null;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
        }
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
        if (isset($map['RuleIdSet'])) {
            $model->ruleIdSet = ruleIdSet::fromMap($map['RuleIdSet']);
        }
        if (isset($map['SpotInstanceTypeOriginalPrice'])) {
            $model->spotInstanceTypeOriginalPrice = $map['SpotInstanceTypeOriginalPrice'];
        }
        if (isset($map['SpotInstanceTypePrice'])) {
            $model->spotInstanceTypePrice = $map['SpotInstanceTypePrice'];
        }
        if (isset($map['SubOrders'])) {
            $model->subOrders = subOrders::fromMap($map['SubOrders']);
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
