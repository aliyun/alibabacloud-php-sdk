<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceResponseBody\priceInfo\depreciateInfo;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceResponseBody\priceInfo\optionalPromotions;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceResponseBody\priceInfo\rules;

class priceInfo extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var bool
     */
    public $isContractActivity;

    /**
     * @var string
     */
    public $lxRequestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var optionalPromotions[]
     */
    public $optionalPromotions;

    /**
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
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'code' => 'Code',
        'currency' => 'Currency',
        'depreciateInfo' => 'DepreciateInfo',
        'discountAmount' => 'DiscountAmount',
        'isContractActivity' => 'IsContractActivity',
        'lxRequestId' => 'LxRequestId',
        'message' => 'Message',
        'optionalPromotions' => 'OptionalPromotions',
        'originalAmount' => 'OriginalAmount',
        'rules' => 'Rules',
        'standDiscountPrice' => 'StandDiscountPrice',
        'standPrice' => 'StandPrice',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate()
    {
        if (null !== $this->depreciateInfo) {
            $this->depreciateInfo->validate();
        }
        if (\is_array($this->optionalPromotions)) {
            Model::validateArray($this->optionalPromotions);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->depreciateInfo) {
            $res['DepreciateInfo'] = null !== $this->depreciateInfo ? $this->depreciateInfo->toArray($noStream) : $this->depreciateInfo;
        }

        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }

        if (null !== $this->isContractActivity) {
            $res['IsContractActivity'] = $this->isContractActivity;
        }

        if (null !== $this->lxRequestId) {
            $res['LxRequestId'] = $this->lxRequestId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->optionalPromotions) {
            if (\is_array($this->optionalPromotions)) {
                $res['OptionalPromotions'] = [];
                $n1 = 0;
                foreach ($this->optionalPromotions as $item1) {
                    $res['OptionalPromotions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['LxRequestId'])) {
            $model->lxRequestId = $map['LxRequestId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OptionalPromotions'])) {
            if (!empty($map['OptionalPromotions'])) {
                $model->optionalPromotions = [];
                $n1 = 0;
                foreach ($map['OptionalPromotions'] as $item1) {
                    $model->optionalPromotions[$n1] = optionalPromotions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
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
