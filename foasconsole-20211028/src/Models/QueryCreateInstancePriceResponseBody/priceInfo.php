<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceResponseBody;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceResponseBody\priceInfo\optionalPromotions;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @example ORDER.INST_HAS_UNPAID_ORDER
     *
     * @var string
     */
    public $code;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 655.2
     *
     * @var float
     */
    public $discountAmount;

    /**
     * @example 存在未支付订单，请先支付或取消原有订单
     *
     * @var string
     */
    public $message;

    /**
     * @var optionalPromotions[]
     */
    public $optionalPromotions;

    /**
     * @example 4368
     *
     * @var float
     */
    public $originalAmount;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @example 3712.8
     *
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'code'               => 'Code',
        'currency'           => 'Currency',
        'discountAmount'     => 'DiscountAmount',
        'message'            => 'Message',
        'optionalPromotions' => 'OptionalPromotions',
        'originalAmount'     => 'OriginalAmount',
        'rules'              => 'Rules',
        'tradeAmount'        => 'TradeAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->optionalPromotions) {
            $res['OptionalPromotions'] = [];
            if (null !== $this->optionalPromotions && \is_array($this->optionalPromotions)) {
                $n = 0;
                foreach ($this->optionalPromotions as $item) {
                    $res['OptionalPromotions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OptionalPromotions'])) {
            if (!empty($map['OptionalPromotions'])) {
                $model->optionalPromotions = [];
                $n                         = 0;
                foreach ($map['OptionalPromotions'] as $item) {
                    $model->optionalPromotions[$n++] = null !== $item ? optionalPromotions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
