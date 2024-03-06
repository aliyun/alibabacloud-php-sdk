<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\coupons;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\depreciateInfo;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\ruleIds;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $contractActivity;

    /**
     * @description The information of coupons.
     *
     * @var coupons
     */
    public $coupons;

    /**
     * @description The currency.
     *
     * @example USD
     *
     * @var string
     */
    public $currency;

    /**
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @description The discount amount of the order.
     *
     * @example 322.4
     *
     * @var string
     */
    public $discountAmount;

    /**
     * @var bool
     */
    public $isContractActivity;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $optionalPromotions;

    /**
     * @description The original price of the order.
     *
     * @example 322.4
     *
     * @var string
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $promDetailList;

    /**
     * @description The rules of the order.
     *
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @description Indicates whether the information of the discount is displayed.
     *
     * @example true
     *
     * @var bool
     */
    public $showDiscountInfo;

    /**
     * @var float
     */
    public $standDiscountPrice;

    /**
     * @var float
     */
    public $standPrice;

    /**
     * @description The final price of the order.
     *
     * @example 0
     *
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'code'               => 'Code',
        'contractActivity'   => 'ContractActivity',
        'coupons'            => 'Coupons',
        'currency'           => 'Currency',
        'depreciateInfo'     => 'DepreciateInfo',
        'discountAmount'     => 'DiscountAmount',
        'isContractActivity' => 'IsContractActivity',
        'message'            => 'Message',
        'optionalPromotions' => 'OptionalPromotions',
        'originalAmount'     => 'OriginalAmount',
        'promDetailList'     => 'PromDetailList',
        'ruleIds'            => 'RuleIds',
        'showDiscountInfo'   => 'ShowDiscountInfo',
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
        if (null !== $this->contractActivity) {
            $res['ContractActivity'] = $this->contractActivity;
        }
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toMap() : null;
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
            $res['OptionalPromotions'] = $this->optionalPromotions;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->promDetailList) {
            $res['PromDetailList'] = $this->promDetailList;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->showDiscountInfo) {
            $res['ShowDiscountInfo'] = $this->showDiscountInfo;
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
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ContractActivity'])) {
            $model->contractActivity = $map['ContractActivity'];
        }
        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
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
            $model->optionalPromotions = $map['OptionalPromotions'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['PromDetailList'])) {
            $model->promDetailList = $map['PromDetailList'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['ShowDiscountInfo'])) {
            $model->showDiscountInfo = $map['ShowDiscountInfo'];
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
