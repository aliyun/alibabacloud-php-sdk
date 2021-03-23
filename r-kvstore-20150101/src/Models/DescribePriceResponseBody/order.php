<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\coupons;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\ruleIds;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $tradeAmount;

    /**
     * @var string
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @var coupons
     */
    public $coupons;
    protected $_name = [
        'originalAmount' => 'OriginalAmount',
        'tradeAmount'    => 'TradeAmount',
        'discountAmount' => 'DiscountAmount',
        'currency'       => 'Currency',
        'ruleIds'        => 'RuleIds',
        'coupons'        => 'Coupons',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toMap() : null;
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
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
        }

        return $model;
    }
}
