<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\GetModifyBEClusterInquiryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @var string[]
     */
    public $pricingRules;

    /**
     * @description The estimated refund amount when the subscription cluster of a subscription instance is changed to a pay-as-you-go cluster.
     *
     * @example -100
     *
     * @var string
     */
    public $refundAmount;

    /**
     * @description The amount of money.
     *
     * @example 1.76
     *
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'currency' => 'Currency',
        'pricingRules' => 'PricingRules',
        'refundAmount' => 'RefundAmount',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->pricingRules) {
            $res['PricingRules'] = $this->pricingRules;
        }
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['PricingRules'])) {
            $model->pricingRules = $map['PricingRules'];
        }
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
