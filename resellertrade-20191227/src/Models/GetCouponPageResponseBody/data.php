<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCouponPageResponseBody;

use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetCouponPageResponseBody\data\currency;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var float
     */
    public $certainMoney;

    /**
     * @var int
     */
    public $couponId;

    /**
     * @var string
     */
    public $couponType;

    /**
     * @var currency
     */
    public $currency;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $discountRate;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var float
     */
    public $frozenAmount;

    /**
     * @var int
     */
    public $frozenCount;

    /**
     * @var int
     */
    public $promotionId;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $universalType;

    /**
     * @var float
     */
    public $upperLimit;

    /**
     * @var int
     */
    public $usageCount;

    /**
     * @var float
     */
    public $usedAmount;

    /**
     * @var int
     */
    public $usedCount;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'amount'        => 'Amount',
        'certainMoney'  => 'CertainMoney',
        'couponId'      => 'CouponId',
        'couponType'    => 'CouponType',
        'currency'      => 'Currency',
        'description'   => 'Description',
        'discountRate'  => 'DiscountRate',
        'endTime'       => 'EndTime',
        'frozenAmount'  => 'FrozenAmount',
        'frozenCount'   => 'FrozenCount',
        'promotionId'   => 'PromotionId',
        'sellerId'      => 'SellerId',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'templateId'    => 'TemplateId',
        'universalType' => 'UniversalType',
        'upperLimit'    => 'UpperLimit',
        'usageCount'    => 'UsageCount',
        'usedAmount'    => 'UsedAmount',
        'usedCount'     => 'UsedCount',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->certainMoney) {
            $res['CertainMoney'] = $this->certainMoney;
        }
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }
        if (null !== $this->couponType) {
            $res['CouponType'] = $this->couponType;
        }
        if (null !== $this->currency) {
            $res['Currency'] = null !== $this->currency ? $this->currency->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->discountRate) {
            $res['DiscountRate'] = $this->discountRate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->frozenAmount) {
            $res['FrozenAmount'] = $this->frozenAmount;
        }
        if (null !== $this->frozenCount) {
            $res['FrozenCount'] = $this->frozenCount;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->universalType) {
            $res['UniversalType'] = $this->universalType;
        }
        if (null !== $this->upperLimit) {
            $res['UpperLimit'] = $this->upperLimit;
        }
        if (null !== $this->usageCount) {
            $res['UsageCount'] = $this->usageCount;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }
        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['CertainMoney'])) {
            $model->certainMoney = $map['CertainMoney'];
        }
        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }
        if (isset($map['CouponType'])) {
            $model->couponType = $map['CouponType'];
        }
        if (isset($map['Currency'])) {
            $model->currency = currency::fromMap($map['Currency']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiscountRate'])) {
            $model->discountRate = $map['DiscountRate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FrozenAmount'])) {
            $model->frozenAmount = $map['FrozenAmount'];
        }
        if (isset($map['FrozenCount'])) {
            $model->frozenCount = $map['FrozenCount'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UniversalType'])) {
            $model->universalType = $map['UniversalType'];
        }
        if (isset($map['UpperLimit'])) {
            $model->upperLimit = $map['UpperLimit'];
        }
        if (isset($map['UsageCount'])) {
            $model->usageCount = $map['UsageCount'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }
        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
