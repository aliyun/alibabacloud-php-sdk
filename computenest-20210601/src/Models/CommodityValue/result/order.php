<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description 货币代码。
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description 优惠后。
     *
     * @example 9.99
     *
     * @var string
     */
    public $tradeAmount;

    /**
     * @description 抵扣金额。
     *
     * @example 1.99
     *
     * @var string
     */
    public $discountAmount;

    /**
     * @description 优惠前。
     *
     * @example 11.98
     *
     * @var string
     */
    public $originalAmount;
    protected $_name = [
        'currency' => 'Currency',
        'tradeAmount' => 'TradeAmount',
        'discountAmount' => 'DiscountAmount',
        'originalAmount' => 'OriginalAmount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        return $model;
    }
}
