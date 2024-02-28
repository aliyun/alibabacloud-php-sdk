<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\coupons;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\depreciateInfo;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\ruleIds;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @description Details about coupons.
     *
     * @var coupons
     */
    public $coupons;

    /**
     * @description The currency used for payment. A value of CNY is used when the order was generated on the China site (aliyun.com), and a value of USD is used when the order was generated on the international site (alibabacloud.com).
     *
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
     * @description The discount amount of the order.
     *
     * @example 0.21
     *
     * @var string
     */
    public $discountAmount;

    /**
     * @description The service fees of the order.
     *
     * @example 0.1
     *
     * @var string
     */
    public $handlingFeeAmount;

    /**
     * @var bool
     */
    public $isContractActivity;

    /**
     * @var string
     */
    public $message;

    /**
     * @description The original price of the order.
     *
     * @example 0.21
     *
     * @var string
     */
    public $originalAmount;

    /**
     * @description Details about promotion rule IDs.
     *
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @description Indicates whether the discount information is displayed.
     *
     * @var bool
     */
    public $showDiscountInfo;

    /**
     * @var int
     */
    public $standDiscountPrice;

    /**
     * @var int
     */
    public $standPrice;

    /**
     * @description The transaction price of the order.
     *
     * @example 10
     *
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'code'               => 'Code',
        'coupons'            => 'Coupons',
        'currency'           => 'Currency',
        'depreciateInfo'     => 'DepreciateInfo',
        'discountAmount'     => 'DiscountAmount',
        'handlingFeeAmount'  => 'HandlingFeeAmount',
        'isContractActivity' => 'IsContractActivity',
        'message'            => 'Message',
        'originalAmount'     => 'OriginalAmount',
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
        if (null !== $this->handlingFeeAmount) {
            $res['HandlingFeeAmount'] = $this->handlingFeeAmount;
        }
        if (null !== $this->isContractActivity) {
            $res['IsContractActivity'] = $this->isContractActivity;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
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
        if (isset($map['HandlingFeeAmount'])) {
            $model->handlingFeeAmount = $map['HandlingFeeAmount'];
        }
        if (isset($map['IsContractActivity'])) {
            $model->isContractActivity = $map['IsContractActivity'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
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
