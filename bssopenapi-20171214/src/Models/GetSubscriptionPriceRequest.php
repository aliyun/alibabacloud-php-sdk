<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest\moduleList;
use AlibabaCloud\Tea\Model;

class GetSubscriptionPriceRequest extends Model
{
    /**
     * @description The ID of the instance for which the price is queried. This parameter is required if you upgrade an instance. You can specify this parameter to obtain the pre-upgrade configurations of the instance.
     *
     * @example i-khkjhxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The information about the pricing module.
     *
     * This parameter is required.
     * @var moduleList[]
     */
    public $moduleList;

    /**
     * @description The type of the order. Valid values:
     *
     *   NewOrder: purchases an instance of an Alibaba Cloud service.
     *   Renewal: renews an instance of an Alibaba Cloud service.
     *   Upgrade: upgrades an instance of an Alibaba Cloud service.
     *
     * This parameter is required.
     * @example NewOrder
     *
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The code of the service. For more information about the service code, see **Codes of Alibaba Cloud Services**.
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service. Specify the parameter based on the pricing document of the specific service.
     *
     * @example ecs
     *
     * @var string
     */
    public $productType;

    /**
     * @description The quantity.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The service duration.
     *
     * @example 1
     *
     * @var int
     */
    public $servicePeriodQuantity;

    /**
     * @description The unit of the service duration. Valid values:
     *
     *   Year
     *   Month
     *
     * @example Year
     *
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @description The billing method. Set the value to Subscription.
     *
     * This parameter is required.
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'instanceId'            => 'InstanceId',
        'moduleList'            => 'ModuleList',
        'orderType'             => 'OrderType',
        'ownerId'               => 'OwnerId',
        'productCode'           => 'ProductCode',
        'productType'           => 'ProductType',
        'quantity'              => 'Quantity',
        'region'                => 'Region',
        'servicePeriodQuantity' => 'ServicePeriodQuantity',
        'servicePeriodUnit'     => 'ServicePeriodUnit',
        'subscriptionType'      => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->moduleList) {
            $res['ModuleList'] = [];
            if (null !== $this->moduleList && \is_array($this->moduleList)) {
                $n = 0;
                foreach ($this->moduleList as $item) {
                    $res['ModuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->servicePeriodQuantity) {
            $res['ServicePeriodQuantity'] = $this->servicePeriodQuantity;
        }
        if (null !== $this->servicePeriodUnit) {
            $res['ServicePeriodUnit'] = $this->servicePeriodUnit;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubscriptionPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModuleList'])) {
            if (!empty($map['ModuleList'])) {
                $model->moduleList = [];
                $n                 = 0;
                foreach ($map['ModuleList'] as $item) {
                    $model->moduleList[$n++] = null !== $item ? moduleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['ServicePeriodQuantity'])) {
            $model->servicePeriodQuantity = $map['ServicePeriodQuantity'];
        }
        if (isset($map['ServicePeriodUnit'])) {
            $model->servicePeriodUnit = $map['ServicePeriodUnit'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
