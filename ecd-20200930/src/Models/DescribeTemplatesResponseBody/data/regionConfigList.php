<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionConfigList extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $cpuCount;

    /**
     * @example 4GiB
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @example 8192
     *
     * @var int
     */
    public $memorySize;

    /**
     * @example cn-beijing+dir-3040*****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @example eds.enterprise_office.4c8g
     *
     * @var string
     */
    public $resourceInstanceType;

    /**
     * @example sp-b9fasjuu0*****
     *
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @example vsw-dgea1*****
     *
     * @var string
     */
    public $subnetId;

    /**
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnable;

    /**
     * @example 3bc77be0-cbce-4a29-b07b-13f16394****
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return regionConfigList
     */
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
