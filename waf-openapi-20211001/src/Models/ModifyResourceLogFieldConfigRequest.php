<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyResourceLogFieldConfigRequest extends Model
{
    /**
     * @var string
     */
    public $deliveryType;

    /**
     * @var string
     */
    public $extendConfig;

    /**
     * @var string
     */
    public $fieldList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $logDeliveryStrategy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'deliveryType' => 'DeliveryType',
        'extendConfig' => 'ExtendConfig',
        'fieldList' => 'FieldList',
        'instanceId' => 'InstanceId',
        'logDeliveryStrategy' => 'LogDeliveryStrategy',
        'regionId' => 'RegionId',
        'resource' => 'Resource',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }

        if (null !== $this->extendConfig) {
            $res['ExtendConfig'] = $this->extendConfig;
        }

        if (null !== $this->fieldList) {
            $res['FieldList'] = $this->fieldList;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logDeliveryStrategy) {
            $res['LogDeliveryStrategy'] = $this->logDeliveryStrategy;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
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
        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        if (isset($map['ExtendConfig'])) {
            $model->extendConfig = $map['ExtendConfig'];
        }

        if (isset($map['FieldList'])) {
            $model->fieldList = $map['FieldList'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogDeliveryStrategy'])) {
            $model->logDeliveryStrategy = $map['LogDeliveryStrategy'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
