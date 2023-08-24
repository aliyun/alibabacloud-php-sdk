<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\coupons;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\ruleIds;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description Queries the fees that you must pay when you create, upgrade, or renew an ApsaraDB for Redis instance.
     *
     * @var coupons
     */
    public $coupons;

    /**
     * @description The order type. Valid values:
     *
     *   **BUY**
     *   **UPGRADE**
     *   **RENEW**
     *   **CONVERT**
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The order information.
     *
     * @example 0.21
     *
     * @var string
     */
    public $discountAmount;

    /**
     * @description The name of the coupon.
     *
     * @example 0.1
     *
     * @var string
     */
    public $handlingFeeAmount;

    /**
     * @description The coupon number.
     *
     * @example 0.21
     *
     * @var string
     */
    public $originalAmount;

    /**
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @description The ID of the request.
     *
     * @example 10
     *
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'coupons'           => 'Coupons',
        'currency'          => 'Currency',
        'discountAmount'    => 'DiscountAmount',
        'handlingFeeAmount' => 'HandlingFeeAmount',
        'originalAmount'    => 'OriginalAmount',
        'ruleIds'           => 'RuleIds',
        'tradeAmount'       => 'TradeAmount',
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
        if (null !== $this->handlingFeeAmount) {
            $res['HandlingFeeAmount'] = $this->handlingFeeAmount;
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
        if (isset($map['HandlingFeeAmount'])) {
            $model->handlingFeeAmount = $map['HandlingFeeAmount'];
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
