<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrdersResponseBody\data\orderList;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @example 66
     *
     * @var string
     */
    public $afterTaxAmount;

    /**
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 2017-06-08T09:41:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 237258627070169
     *
     * @var string
     */
    public $orderId;

    /**
     * @example New
     *
     * @var string
     */
    public $orderType;

    /**
     * @example CNY
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @example Paid
     *
     * @var string
     */
    public $paymentStatus;

    /**
     * @example 2017-06-08T09:41:30Z
     *
     * @var string
     */
    public $paymentTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxAmount;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @example 0
     *
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @example 234535345345342
     *
     * @var string
     */
    public $relatedOrderId;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @example 1
     *
     * @var string
     */
    public $tax;
    protected $_name = [
        'afterTaxAmount' => 'AfterTaxAmount',
        'commodityCode' => 'CommodityCode',
        'createTime' => 'CreateTime',
        'currency' => 'Currency',
        'orderId' => 'OrderId',
        'orderType' => 'OrderType',
        'paymentCurrency' => 'PaymentCurrency',
        'paymentStatus' => 'PaymentStatus',
        'paymentTime' => 'PaymentTime',
        'pretaxAmount' => 'PretaxAmount',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'relatedOrderId' => 'RelatedOrderId',
        'subscriptionType' => 'SubscriptionType',
        'tax' => 'Tax',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->paymentStatus) {
            $res['PaymentStatus'] = $this->paymentStatus;
        }
        if (null !== $this->paymentTime) {
            $res['PaymentTime'] = $this->paymentTime;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->relatedOrderId) {
            $res['RelatedOrderId'] = $this->relatedOrderId;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
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
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['PaymentStatus'])) {
            $model->paymentStatus = $map['PaymentStatus'];
        }
        if (isset($map['PaymentTime'])) {
            $model->paymentTime = $map['PaymentTime'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RelatedOrderId'])) {
            $model->relatedOrderId = $map['RelatedOrderId'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }

        return $model;
    }
}
