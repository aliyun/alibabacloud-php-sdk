<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description The after-tax amount of the order.
     *
     * @example 0
     *
     * @var string
     */
    public $afterTaxAmount;

    /**
     * @var billModuleConfig
     */
    public $billModuleConfig;

    /**
     * @description The service code.
     *
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The configurations of the main service.
     *
     * @example DBInstanceClass:[DBInstanceClass:rds.mysql.s1.small;EngineVersion:8.0;Region:cn-qingdao;]DBFlowType:[Region:cn-qingdao;]
     *
     * @var string
     */
    public $config;

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
     * @description The order extension information.
     *
     * @var string[]
     */
    public $extendInfos;

    /**
     * @description The instance IDs.
     *
     * @example ["rm-bp1a2vsr018313t6o"]
     *
     * @var string
     */
    public $instanceIDs;

    /**
     * @description The ID of the Resource Access Management (RAM) user who performs operations on the order. If no RAM user is involved, leave this parameter blank.
     *
     * @example 23424243432
     *
     * @var string
     */
    public $operator;

    /**
     * @description The ID of the order.
     *
     * @example 3453425324
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The type of the suborder. Valid values:
     *
     *   ProductSubOrder: the service suborder
     *   RefundSubOrder: the refund suborder
     *
     * @example ProductSubOrder
     *
     * @var string
     */
    public $orderSubType;

    /**
     * @description The type of the order. Valid values:
     *
     *   New: purchases an instance.
     *   Renew: renews an instance.
     *   Upgrade: upgrades the configurations of an instance.
     *   Refund: applies for a refund.
     *   Convert: switches the billing method.
     *   Downgrade: downgrades the configurations of an instance.
     *   ResizeDisk: resizes the disk.
     *
     * @example New
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The module information without standardized conversion.
     *
     * @example DBInstanceClass:[DBInstanceClass:rds.mysql.s1.small;EngineVersion:8.0;Region:cn-qingdao;]DBFlowType:[Region:cn-qingdao;]
     *
     * @var string
     */
    public $originalConfig;

    /**
     * @var originalModuleConfig
     */
    public $originalModuleConfig;

    /**
     * @description The currency of payment.
     *
     * @example CNY
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description The status of payment. Valid values:
     *
     *   Unpaid: The order is not paid.
     *   Paid: The order is paid.
     *   Cancelled: The order is canceled.
     *
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
     * @description The number of main services.
     *
     * @example 1
     *
     * @var string
     */
    public $quantity;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the associated order.
     *
     * @example 4353453534543
     *
     * @var string
     */
    public $relatedOrderId;

    /**
     * @description The ID of the suborder.
     *
     * @example 234343
     *
     * @var string
     */
    public $subOrderId;

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

    /**
     * @description The time when the service ends.
     *
     * @example 2117-06-08T16:00:00Z
     *
     * @var string
     */
    public $usageEndTime;

    /**
     * @description The time when the service starts.
     *
     * @example 2017-06-08T16:00:00Z
     *
     * @var string
     */
    public $usageStartTime;
    protected $_name = [
        'afterTaxAmount'       => 'AfterTaxAmount',
        'billModuleConfig'     => 'BillModuleConfig',
        'commodityCode'        => 'CommodityCode',
        'config'               => 'Config',
        'createTime'           => 'CreateTime',
        'currency'             => 'Currency',
        'extendInfos'          => 'ExtendInfos',
        'instanceIDs'          => 'InstanceIDs',
        'operator'             => 'Operator',
        'orderId'              => 'OrderId',
        'orderSubType'         => 'OrderSubType',
        'orderType'            => 'OrderType',
        'originalConfig'       => 'OriginalConfig',
        'originalModuleConfig' => 'OriginalModuleConfig',
        'paymentCurrency'      => 'PaymentCurrency',
        'paymentStatus'        => 'PaymentStatus',
        'paymentTime'          => 'PaymentTime',
        'pretaxAmount'         => 'PretaxAmount',
        'pretaxAmountLocal'    => 'PretaxAmountLocal',
        'pretaxGrossAmount'    => 'PretaxGrossAmount',
        'productCode'          => 'ProductCode',
        'productType'          => 'ProductType',
        'quantity'             => 'Quantity',
        'region'               => 'Region',
        'relatedOrderId'       => 'RelatedOrderId',
        'subOrderId'           => 'SubOrderId',
        'subscriptionType'     => 'SubscriptionType',
        'tax'                  => 'Tax',
        'usageEndTime'         => 'UsageEndTime',
        'usageStartTime'       => 'UsageStartTime',
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
        if (null !== $this->billModuleConfig) {
            $res['BillModuleConfig'] = null !== $this->billModuleConfig ? $this->billModuleConfig->toMap() : null;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->extendInfos) {
            $res['ExtendInfos'] = $this->extendInfos;
        }
        if (null !== $this->instanceIDs) {
            $res['InstanceIDs'] = $this->instanceIDs;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderSubType) {
            $res['OrderSubType'] = $this->orderSubType;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->originalConfig) {
            $res['OriginalConfig'] = $this->originalConfig;
        }
        if (null !== $this->originalModuleConfig) {
            $res['OriginalModuleConfig'] = null !== $this->originalModuleConfig ? $this->originalModuleConfig->toMap() : null;
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
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->relatedOrderId) {
            $res['RelatedOrderId'] = $this->relatedOrderId;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }
        if (null !== $this->usageEndTime) {
            $res['UsageEndTime'] = $this->usageEndTime;
        }
        if (null !== $this->usageStartTime) {
            $res['UsageStartTime'] = $this->usageStartTime;
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
        if (isset($map['BillModuleConfig'])) {
            $model->billModuleConfig = billModuleConfig::fromMap($map['BillModuleConfig']);
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ExtendInfos'])) {
            $model->extendInfos = $map['ExtendInfos'];
        }
        if (isset($map['InstanceIDs'])) {
            $model->instanceIDs = $map['InstanceIDs'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderSubType'])) {
            $model->orderSubType = $map['OrderSubType'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OriginalConfig'])) {
            $model->originalConfig = $map['OriginalConfig'];
        }
        if (isset($map['OriginalModuleConfig'])) {
            $model->originalModuleConfig = originalModuleConfig::fromMap($map['OriginalModuleConfig']);
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
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RelatedOrderId'])) {
            $model->relatedOrderId = $map['RelatedOrderId'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }
        if (isset($map['UsageEndTime'])) {
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if (isset($map['UsageStartTime'])) {
            $model->usageStartTime = $map['UsageStartTime'];
        }

        return $model;
    }
}
