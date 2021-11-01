<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceResponseBody;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceResponseBody\priceInfo\optionalPromotions;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @description 错误码
     *
     * @var string
     */
    public $code;

    /**
     * @description 货币单位。
     *
     * @var string
     */
    public $currency;

    /**
     * @description 折扣
     *
     * @var float
     */
    public $discountAmount;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 可选择的优惠券
     *
     * @var optionalPromotions
     */
    public $optionalPromotions;

    /**
     * @description 原价
     *
     * @var float
     */
    public $originalAmount;

    /**
     * @description 活动规则。
     *
     * @var rules[]
     */
    public $rules;

    /**
     * @description 最终价，为原价减去折扣。
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
            $res['OptionalPromotions'] = null !== $this->optionalPromotions ? $this->optionalPromotions->toMap() : null;
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
            $model->optionalPromotions = optionalPromotions::fromMap($map['OptionalPromotions']);
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
