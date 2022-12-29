<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\order\coupons;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\order\ruleIds;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description Details about the coupons.
     *
     * @var coupons
     */
    public $coupons;

    /**
     * @description The type of the currency. Valid values:
     *
     *   USD: United States dollar
     *   JPY: Japanese Yen
     *
     * @example USD
     *
     * @var string
     */
    public $currency;

    /**
     * @description The discount amount of the order.
     *
     * @example 1144.8
     *
     * @var float
     */
    public $discountAmount;

    /**
     * @description The original price of the order.
     *
     * @example 1144.8
     *
     * @var float
     */
    public $originalAmount;

    /**
     * @description The IDs of the matched rules.
     *
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @description The actual price of the order.
     *
     * @example 0
     *
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'coupons'        => 'Coupons',
        'currency'       => 'Currency',
        'discountAmount' => 'DiscountAmount',
        'originalAmount' => 'OriginalAmount',
        'ruleIds'        => 'RuleIds',
        'tradeAmount'    => 'TradeAmount',
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
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
