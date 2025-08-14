<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig;

class order extends Model
{
    /**
     * @var string
     */
    public $afterTaxAmount;

    /**
     * @var billModuleConfig
     */
    public $billModuleConfig;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string[]
     */
    public $extendInfos;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderSubType;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $originalConfig;

    /**
     * @var originalModuleConfig
     */
    public $originalModuleConfig;

    /**
     * @var string
     */
    public $paymentCurrency;

    /**
     * @var string
     */
    public $paymentStatus;

    /**
     * @var string
     */
    public $paymentTime;

    /**
     * @var string
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $quantity;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $relatedOrderId;

    /**
     * @var string
     */
    public $subOrderId;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $tax;

    /**
     * @var string
     */
    public $usageEndTime;

    /**
     * @var string
     */
    public $usageStartTime;
    protected $_name = [
        'afterTaxAmount' => 'AfterTaxAmount',
        'billModuleConfig' => 'BillModuleConfig',
        'commodityCode' => 'CommodityCode',
        'config' => 'Config',
        'createTime' => 'CreateTime',
        'currency' => 'Currency',
        'extendInfos' => 'ExtendInfos',
        'instanceIds' => 'InstanceIds',
        'operator' => 'Operator',
        'orderId' => 'OrderId',
        'orderSubType' => 'OrderSubType',
        'orderType' => 'OrderType',
        'originalConfig' => 'OriginalConfig',
        'originalModuleConfig' => 'OriginalModuleConfig',
        'paymentCurrency' => 'PaymentCurrency',
        'paymentStatus' => 'PaymentStatus',
        'paymentTime' => 'PaymentTime',
        'pretaxAmount' => 'PretaxAmount',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'quantity' => 'Quantity',
        'region' => 'Region',
        'relatedOrderId' => 'RelatedOrderId',
        'subOrderId' => 'SubOrderId',
        'subscriptionType' => 'SubscriptionType',
        'tax' => 'Tax',
        'usageEndTime' => 'UsageEndTime',
        'usageStartTime' => 'UsageStartTime',
    ];

    public function validate()
    {
        if (null !== $this->billModuleConfig) {
            $this->billModuleConfig->validate();
        }
        if (\is_array($this->extendInfos)) {
            Model::validateArray($this->extendInfos);
        }
        if (null !== $this->originalModuleConfig) {
            $this->originalModuleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }

        if (null !== $this->billModuleConfig) {
            $res['BillModuleConfig'] = null !== $this->billModuleConfig ? $this->billModuleConfig->toArray($noStream) : $this->billModuleConfig;
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
            if (\is_array($this->extendInfos)) {
                $res['ExtendInfos'] = [];
                foreach ($this->extendInfos as $key1 => $value1) {
                    $res['ExtendInfos'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
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
            $res['OriginalModuleConfig'] = null !== $this->originalModuleConfig ? $this->originalModuleConfig->toArray($noStream) : $this->originalModuleConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ExtendInfos'])) {
                $model->extendInfos = [];
                foreach ($map['ExtendInfos'] as $key1 => $value1) {
                    $model->extendInfos[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
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
