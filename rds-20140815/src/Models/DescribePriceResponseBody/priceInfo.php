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
     * @description The information about the coupon.
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
     * @description The order information.
     *
     * @example Order Information
     *
     * @var string
     */
    public $orderLines;

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
     * @description The estimated hourly cost that is calculated based on the maximum number of RCUs you specify.
     *
     * @example 1**
     *
     * @var float
     */
    public $tradeMaxRCUAmount;

    /**
     * @description The estimated hourly cost that is calculated based on the minimum number of RCUs you specify.
     *
     * @example 2**
     *
     * @var float
     */
    public $tradeMinRCUAmount;

    /**
     * @description The transaction price, which is equal to the original price minus the discount.
     *
     * @example 2504
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'activityInfo'      => 'ActivityInfo',
        'coupons'           => 'Coupons',
        'currency'          => 'Currency',
        'discountPrice'     => 'DiscountPrice',
        'orderLines'        => 'OrderLines',
        'originalPrice'     => 'OriginalPrice',
        'ruleIds'           => 'RuleIds',
        'tradeMaxRCUAmount' => 'TradeMaxRCUAmount',
        'tradeMinRCUAmount' => 'TradeMinRCUAmount',
        'tradePrice'        => 'TradePrice',
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
        if (null !== $this->orderLines) {
            $res['OrderLines'] = $this->orderLines;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->tradeMaxRCUAmount) {
            $res['TradeMaxRCUAmount'] = $this->tradeMaxRCUAmount;
        }
        if (null !== $this->tradeMinRCUAmount) {
            $res['TradeMinRCUAmount'] = $this->tradeMinRCUAmount;
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
        if (isset($map['OrderLines'])) {
            $model->orderLines = $map['OrderLines'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['TradeMaxRCUAmount'])) {
            $model->tradeMaxRCUAmount = $map['TradeMaxRCUAmount'];
        }
        if (isset($map['TradeMinRCUAmount'])) {
            $model->tradeMinRCUAmount = $map['TradeMinRCUAmount'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
