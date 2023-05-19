<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponseBody\data\orderList;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description The aftertax amount of the order.
     *
     * @example 66
     *
     * @var string
     */
    public $afterTaxAmount;

    /**
     * @description The service code.
     *
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The time when the order was created.
     *
     * @example 2017-06-08T09:41:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The ID of the order.
     *
     * @example 34532532
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The type of the order. Valid values:
     *
     *   New: purchases an instance.
     *   Renew: renews an instance.
     *   Upgrade: upgrades the configurations of an instance.
     *   Refund: applies for a refund.
     *
     * @example New
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The currency of payment.
     *
     * @example CNY
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description The status of payment. Valid values for a non-refund order:
     *
     *   Unpaid: The order is not paid.
     *   Paid: The order is paid.
     *   Cancelled: The order is canceled.
     *
     * > : The value is NULL for a refund order.
     * @example Paid
     *
     * @var string
     */
    public $paymentStatus;

    /**
     * @description The time of payment.
     *
     * @example 2017-06-08T09:41:30Z
     *
     * @var string
     */
    public $paymentTime;

    /**
     * @description The pretax amount of the order.
     *
     * @example 0
     *
     * @var string
     */
    public $pretaxAmount;

    /**
     * @description The pretax amount of the order in local currency.
     *
     * @example 0
     *
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @description The pretax gross amount of the order.
     *
     * @example 0
     *
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @description The code of the main service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the main service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The ID of the associated order.
     *
     * @example 234535345345342
     *
     * @var string
     */
    public $relatedOrderId;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description The tax of the order.
     *
     * @example 1
     *
     * @var string
     */
    public $tax;
    protected $_name = [
        'afterTaxAmount'    => 'AfterTaxAmount',
        'commodityCode'     => 'CommodityCode',
        'createTime'        => 'CreateTime',
        'currency'          => 'Currency',
        'orderId'           => 'OrderId',
        'orderType'         => 'OrderType',
        'paymentCurrency'   => 'PaymentCurrency',
        'paymentStatus'     => 'PaymentStatus',
        'paymentTime'       => 'PaymentTime',
        'pretaxAmount'      => 'PretaxAmount',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'productCode'       => 'ProductCode',
        'productType'       => 'ProductType',
        'relatedOrderId'    => 'RelatedOrderId',
        'subscriptionType'  => 'SubscriptionType',
        'tax'               => 'Tax',
    ];

    public function validate()
    {
    }

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
