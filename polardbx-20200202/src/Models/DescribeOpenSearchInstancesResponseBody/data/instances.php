<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataNodeCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $memoryGB;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $specDisplay;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSizeGB;
    protected $_name = [
        'availabilityZone' => 'AvailabilityZone',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'createTime' => 'CreateTime',
        'dataNodeCount' => 'DataNodeCount',
        'description' => 'Description',
        'engineVersion' => 'EngineVersion',
        'instanceId' => 'InstanceId',
        'memoryGB' => 'MemoryGB',
        'netType' => 'NetType',
        'regionId' => 'RegionId',
        'specDisplay' => 'SpecDisplay',
        'status' => 'Status',
        'storageSizeGB' => 'StorageSizeGB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataNodeCount) {
            $res['DataNodeCount'] = $this->dataNodeCount;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->memoryGB) {
            $res['MemoryGB'] = $this->memoryGB;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->specDisplay) {
            $res['SpecDisplay'] = $this->specDisplay;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSizeGB) {
            $res['StorageSizeGB'] = $this->storageSizeGB;
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
        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataNodeCount'])) {
            $model->dataNodeCount = $map['DataNodeCount'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MemoryGB'])) {
            $model->memoryGB = $map['MemoryGB'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SpecDisplay'])) {
            $model->specDisplay = $map['SpecDisplay'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageSizeGB'])) {
            $model->storageSizeGB = $map['StorageSizeGB'];
        }

        return $model;
    }
}
