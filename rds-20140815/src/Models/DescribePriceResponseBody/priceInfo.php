<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo\activityInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo\coupons;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo\ruleIds;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @description The information about the promotion.
     *
     * @var activityInfo
     */
    public $activityInfo;

    /**
     * @description An array that consists of information about the coupon.
     *
     * @var coupons
     */
    public $coupons;

    /**
     * @description The currency unit.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The discount.
     *
     * @example 0
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @description The original price.
     *
     * @example 2504
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description An array that consists of the ID of the promotion rule.
     *
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @description The transaction price, which is equal to the original price minus the discount.
     *
     * @example 2504
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'activityInfo'  => 'ActivityInfo',
        'coupons'       => 'Coupons',
        'currency'      => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'ruleIds'       => 'RuleIds',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityInfo) {
            $res['ActivityInfo'] = null !== $this->activityInfo ? $this->activityInfo->toMap() : null;
        }
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toMap() : null;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityInfo'])) {
            $model->activityInfo = activityInfo::fromMap($map['ActivityInfo']);
        }
        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
