<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class CreateGadInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $masterDbEngineType;

    /**
     * @var string
     */
    public $masterDbInstanceId;

    /**
     * @var string
     */
    public $masterDbInstanceRegion;

    /**
     * @var string
     */
    public $masterDbZoneId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'masterDbEngineType' => 'MasterDbEngineType',
        'masterDbInstanceId' => 'MasterDbInstanceId',
        'masterDbInstanceRegion' => 'MasterDbInstanceRegion',
        'masterDbZoneId' => 'MasterDbZoneId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->masterDbEngineType) {
            $res['MasterDbEngineType'] = $this->masterDbEngineType;
        }

        if (null !== $this->masterDbInstanceId) {
            $res['MasterDbInstanceId'] = $this->masterDbInstanceId;
        }

        if (null !== $this->masterDbInstanceRegion) {
            $res['MasterDbInstanceRegion'] = $this->masterDbInstanceRegion;
        }

        if (null !== $this->masterDbZoneId) {
            $res['MasterDbZoneId'] = $this->masterDbZoneId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MasterDbEngineType'])) {
            $model->masterDbEngineType = $map['MasterDbEngineType'];
        }

        if (isset($map['MasterDbInstanceId'])) {
            $model->masterDbInstanceId = $map['MasterDbInstanceId'];
        }

        if (isset($map['MasterDbInstanceRegion'])) {
            $model->masterDbInstanceRegion = $map['MasterDbInstanceRegion'];
        }

        if (isset($map['MasterDbZoneId'])) {
            $model->masterDbZoneId = $map['MasterDbZoneId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
