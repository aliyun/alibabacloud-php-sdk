<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyHybridCloudServerRequest extends Model
{
    /**
     * @var string
     */
    public $continents;
    /**
     * @var string
     */
    public $customName;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $mid;
    /**
     * @var string
     */
    public $operator;
    /**
     * @var string
     */
    public $regionCode;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'continents'                     => 'Continents',
        'customName'                     => 'CustomName',
        'instanceId'                     => 'InstanceId',
        'mid'                            => 'Mid',
        'operator'                       => 'Operator',
        'regionCode'                     => 'RegionCode',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->continents) {
            $res['Continents'] = $this->continents;
        }

        if (null !== $this->customName) {
            $res['CustomName'] = $this->customName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Continents'])) {
            $model->continents = $map['Continents'];
        }

        if (isset($map['CustomName'])) {
            $model->customName = $map['CustomName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
