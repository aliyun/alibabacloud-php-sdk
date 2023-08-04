<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\ListOrderResponseBody\data;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListOrderResponseBody\data\list_\deliveryInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example ali_2
     *
     * @var string
     */
    public $aliFee;

    /**
     * @var string
     */
    public $apnName;

    /**
     * @var string
     */
    public $apnRegion;

    /**
     * @example 1101
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @example 100
     *
     * @var int
     */
    public $buyNum;

    /**
     * @example 2022-04-11 16:43:00
     *
     * @var int
     */
    public $cardPayCount;

    /**
     * @example CM-***-*-2-**M
     *
     * @var string
     */
    public $credentialNo;

    /**
     * @example AL-UPG-******3_beika4
     *
     * @var string
     */
    public $credentialPackage;

    /**
     * @example 30MB
     *
     * @var string
     */
    public $dataLevel;

    /**
     * @var deliveryInfo
     */
    public $deliveryInfo;

    /**
     * @var string[]
     */
    public $expressNoList;

    /**
     * @example singlecard
     *
     * @var string
     */
    public $flowType;

    /**
     * @example 90
     *
     * @var int
     */
    public $functionFee;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @example https://us******60589
     *
     * @var string
     */
    public $orderDetailUrl;

    /**
     * @example 21450******0275
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 123123
     *
     * @var string
     */
    public $orderInfo;

    /**
     * @example processing
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example NEW
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $payDuration;

    /**
     * @example 2022-04-11 16:43:00
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 200
     *
     * @var string
     */
    public $poolCapacity;

    /**
     * @example GB
     *
     * @var string
     */
    public $poolCapacityUnit;

    /**
     * @example beika4
     *
     * @var string
     */
    public $poolNo;

    /**
     * @var int
     */
    public $resourceQuantity;

    /**
     * @example CMCC
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'aliFee'            => 'AliFee',
        'apnName'           => 'ApnName',
        'apnRegion'         => 'ApnRegion',
        'billingCycle'      => 'BillingCycle',
        'buyNum'            => 'BuyNum',
        'cardPayCount'      => 'CardPayCount',
        'credentialNo'      => 'CredentialNo',
        'credentialPackage' => 'CredentialPackage',
        'dataLevel'         => 'DataLevel',
        'deliveryInfo'      => 'DeliveryInfo',
        'expressNoList'     => 'ExpressNoList',
        'flowType'          => 'FlowType',
        'functionFee'       => 'FunctionFee',
        'networkType'       => 'NetworkType',
        'orderDetailUrl'    => 'OrderDetailUrl',
        'orderId'           => 'OrderId',
        'orderInfo'         => 'OrderInfo',
        'orderStatus'       => 'OrderStatus',
        'orderType'         => 'OrderType',
        'payDuration'       => 'PayDuration',
        'payTime'           => 'PayTime',
        'poolCapacity'      => 'PoolCapacity',
        'poolCapacityUnit'  => 'PoolCapacityUnit',
        'poolNo'            => 'PoolNo',
        'resourceQuantity'  => 'ResourceQuantity',
        'vendor'            => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliFee) {
            $res['AliFee'] = $this->aliFee;
        }
        if (null !== $this->apnName) {
            $res['ApnName'] = $this->apnName;
        }
        if (null !== $this->apnRegion) {
            $res['ApnRegion'] = $this->apnRegion;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->buyNum) {
            $res['BuyNum'] = $this->buyNum;
        }
        if (null !== $this->cardPayCount) {
            $res['CardPayCount'] = $this->cardPayCount;
        }
        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }
        if (null !== $this->credentialPackage) {
            $res['CredentialPackage'] = $this->credentialPackage;
        }
        if (null !== $this->dataLevel) {
            $res['DataLevel'] = $this->dataLevel;
        }
        if (null !== $this->deliveryInfo) {
            $res['DeliveryInfo'] = null !== $this->deliveryInfo ? $this->deliveryInfo->toMap() : null;
        }
        if (null !== $this->expressNoList) {
            $res['ExpressNoList'] = $this->expressNoList;
        }
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }
        if (null !== $this->functionFee) {
            $res['FunctionFee'] = $this->functionFee;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->orderDetailUrl) {
            $res['OrderDetailUrl'] = $this->orderDetailUrl;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderInfo) {
            $res['OrderInfo'] = $this->orderInfo;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->payDuration) {
            $res['PayDuration'] = $this->payDuration;
        }
        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }
        if (null !== $this->poolCapacity) {
            $res['PoolCapacity'] = $this->poolCapacity;
        }
        if (null !== $this->poolCapacityUnit) {
            $res['PoolCapacityUnit'] = $this->poolCapacityUnit;
        }
        if (null !== $this->poolNo) {
            $res['PoolNo'] = $this->poolNo;
        }
        if (null !== $this->resourceQuantity) {
            $res['ResourceQuantity'] = $this->resourceQuantity;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliFee'])) {
            $model->aliFee = $map['AliFee'];
        }
        if (isset($map['ApnName'])) {
            $model->apnName = $map['ApnName'];
        }
        if (isset($map['ApnRegion'])) {
            $model->apnRegion = $map['ApnRegion'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['BuyNum'])) {
            $model->buyNum = $map['BuyNum'];
        }
        if (isset($map['CardPayCount'])) {
            $model->cardPayCount = $map['CardPayCount'];
        }
        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }
        if (isset($map['CredentialPackage'])) {
            $model->credentialPackage = $map['CredentialPackage'];
        }
        if (isset($map['DataLevel'])) {
            $model->dataLevel = $map['DataLevel'];
        }
        if (isset($map['DeliveryInfo'])) {
            $model->deliveryInfo = deliveryInfo::fromMap($map['DeliveryInfo']);
        }
        if (isset($map['ExpressNoList'])) {
            if (!empty($map['ExpressNoList'])) {
                $model->expressNoList = $map['ExpressNoList'];
            }
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }
        if (isset($map['FunctionFee'])) {
            $model->functionFee = $map['FunctionFee'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OrderDetailUrl'])) {
            $model->orderDetailUrl = $map['OrderDetailUrl'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderInfo'])) {
            $model->orderInfo = $map['OrderInfo'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PayDuration'])) {
            $model->payDuration = $map['PayDuration'];
        }
        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }
        if (isset($map['PoolCapacity'])) {
            $model->poolCapacity = $map['PoolCapacity'];
        }
        if (isset($map['PoolCapacityUnit'])) {
            $model->poolCapacityUnit = $map['PoolCapacityUnit'];
        }
        if (isset($map['PoolNo'])) {
            $model->poolNo = $map['PoolNo'];
        }
        if (isset($map['ResourceQuantity'])) {
            $model->resourceQuantity = $map['ResourceQuantity'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
