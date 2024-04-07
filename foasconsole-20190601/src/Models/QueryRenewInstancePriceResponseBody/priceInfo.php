<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryRenewInstancePriceResponseBody;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryRenewInstancePriceResponseBody\priceInfo\depreciateInfo;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryRenewInstancePriceResponseBody\priceInfo\optionalPromotions;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryRenewInstancePriceResponseBody\priceInfo\rules;
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
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @example 655.2
     *
     * @var float
     */
    public $discountAmount;

    /**
     * @var bool
     */
    public $isContractActivity;

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
     * @var string
     */
    public $standDiscountPrice;

    /**
     * @var string
     */
    public $standPrice;

    /**
     * @example 3712.8
     *
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'code'               => 'Code',
        'currency'           => 'Currency',
        'depreciateInfo'     => 'DepreciateInfo',
        'discountAmount'     => 'DiscountAmount',
        'isContractActivity' => 'IsContractActivity',
        'message'            => 'Message',
        'optionalPromotions' => 'OptionalPromotions',
        'originalAmount'     => 'OriginalAmount',
        'rules'              => 'Rules',
        'standDiscountPrice' => 'StandDiscountPrice',
        'standPrice'         => 'StandPrice',
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
        if (null !== $this->depreciateInfo) {
            $res['DepreciateInfo'] = null !== $this->depreciateInfo ? $this->depreciateInfo->toMap() : null;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->isContractActivity) {
            $res['IsContractActivity'] = $this->isContractActivity;
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
        if (null !== $this->standDiscountPrice) {
            $res['StandDiscountPrice'] = $this->standDiscountPrice;
        }
        if (null !== $this->standPrice) {
            $res['StandPrice'] = $this->standPrice;
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
        if (isset($map['DepreciateInfo'])) {
            $model->depreciateInfo = depreciateInfo::fromMap($map['DepreciateInfo']);
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['IsContractActivity'])) {
            $model->isContractActivity = $map['IsContractActivity'];
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
        if (isset($map['StandDiscountPrice'])) {
            $model->standDiscountPrice = $map['StandDiscountPrice'];
        }
        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
