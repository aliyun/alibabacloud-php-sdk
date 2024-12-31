<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons;

use AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons\coupon\productCodes;
use AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons\coupon\tradeTypes;
use AlibabaCloud\Tea\Model;

class coupon extends Model
{
    /**
     * @var string
     */
    public $application;

    /**
     * @var string
     */
    public $balanceAmount;

    /**
     * @var string
     */
    public $couponNumber;

    /**
     * @var int
     */
    public $couponTemplateId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $deliveryTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredAmount;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $frozenAmount;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $priceLimit;

    /**
     * @var productCodes
     */
    public $productCodes;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $totalAmount;

    /**
     * @var tradeTypes
     */
    public $tradeTypes;
    protected $_name = [
        'application'      => 'Application',
        'balanceAmount'    => 'BalanceAmount',
        'couponNumber'     => 'CouponNumber',
        'couponTemplateId' => 'CouponTemplateId',
        'creationTime'     => 'CreationTime',
        'deliveryTime'     => 'DeliveryTime',
        'description'      => 'Description',
        'expiredAmount'    => 'ExpiredAmount',
        'expiredTime'      => 'ExpiredTime',
        'frozenAmount'     => 'FrozenAmount',
        'modificationTime' => 'ModificationTime',
        'priceLimit'       => 'PriceLimit',
        'productCodes'     => 'ProductCodes',
        'status'           => 'Status',
        'totalAmount'      => 'TotalAmount',
        'tradeTypes'       => 'TradeTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->balanceAmount) {
            $res['BalanceAmount'] = $this->balanceAmount;
        }
        if (null !== $this->couponNumber) {
            $res['CouponNumber'] = $this->couponNumber;
        }
        if (null !== $this->couponTemplateId) {
            $res['CouponTemplateId'] = $this->couponTemplateId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredAmount) {
            $res['ExpiredAmount'] = $this->expiredAmount;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->frozenAmount) {
            $res['FrozenAmount'] = $this->frozenAmount;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->productCodes) {
            $res['ProductCodes'] = null !== $this->productCodes ? $this->productCodes->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->tradeTypes) {
            $res['TradeTypes'] = null !== $this->tradeTypes ? $this->tradeTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coupon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['BalanceAmount'])) {
            $model->balanceAmount = $map['BalanceAmount'];
        }
        if (isset($map['CouponNumber'])) {
            $model->couponNumber = $map['CouponNumber'];
        }
        if (isset($map['CouponTemplateId'])) {
            $model->couponTemplateId = $map['CouponTemplateId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredAmount'])) {
            $model->expiredAmount = $map['ExpiredAmount'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FrozenAmount'])) {
            $model->frozenAmount = $map['FrozenAmount'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['ProductCodes'])) {
            $model->productCodes = productCodes::fromMap($map['ProductCodes']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['TradeTypes'])) {
            $model->tradeTypes = tradeTypes::fromMap($map['TradeTypes']);
        }

        return $model;
    }
}
