<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest\moduleList;

class GetSubscriptionPriceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var moduleList[]
     */
    public $moduleList;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $servicePeriodQuantity;

    /**
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'moduleList' => 'ModuleList',
        'orderType' => 'OrderType',
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'quantity' => 'Quantity',
        'region' => 'Region',
        'servicePeriodQuantity' => 'ServicePeriodQuantity',
        'servicePeriodUnit' => 'ServicePeriodUnit',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
        if (\is_array($this->moduleList)) {
            Model::validateArray($this->moduleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->moduleList) {
            if (\is_array($this->moduleList)) {
                $res['ModuleList'] = [];
                $n1 = 0;
                foreach ($this->moduleList as $item1) {
                    $res['ModuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModuleList'])) {
            if (!empty($map['ModuleList'])) {
                $model->moduleList = [];
                $n1 = 0;
                foreach ($map['ModuleList'] as $item1) {
                    $model->moduleList[$n1] = moduleList::fromMap($item1);
                    ++$n1;
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
