<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class CreateApiExportRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $param;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'instanceId' => 'InstanceId',
        'param' => 'Param',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'type' => 'Type',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
