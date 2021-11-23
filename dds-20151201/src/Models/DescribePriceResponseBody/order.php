<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\coupons;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\ruleIds;
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
     * @var string
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @var string
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
