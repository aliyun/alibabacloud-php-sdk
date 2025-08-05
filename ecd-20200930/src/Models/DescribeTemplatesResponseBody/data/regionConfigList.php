<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody\data;

use AlibabaCloud\Dara\Model;

class regionConfigList extends Model
{
    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceInstanceType;

    /**
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @var string
     */
    public $subnetId;

    /**
     * @var bool
     */
    public $volumeEncryptionEnable;

    /**
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'cpuCount' => 'CpuCount',
        'gpuSpec' => 'GpuSpec',
        'memorySize' => 'MemorySize',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'resourceInstanceType' => 'ResourceInstanceType',
        'snapshotPolicyId' => 'SnapshotPolicyId',
        'subnetId' => 'SubnetId',
        'volumeEncryptionEnable' => 'VolumeEncryptionEnable',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }

        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }

        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceInstanceType) {
            $res['ResourceInstanceType'] = $this->resourceInstanceType;
        }

        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
        }

        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        if (null !== $this->volumeEncryptionEnable) {
            $res['VolumeEncryptionEnable'] = $this->volumeEncryptionEnable;
        }

        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
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
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }

        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }

        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceInstanceType'])) {
            $model->resourceInstanceType = $map['ResourceInstanceType'];
        }

        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }

        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        if (isset($map['VolumeEncryptionEnable'])) {
            $model->volumeEncryptionEnable = $map['VolumeEncryptionEnable'];
        }

        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
