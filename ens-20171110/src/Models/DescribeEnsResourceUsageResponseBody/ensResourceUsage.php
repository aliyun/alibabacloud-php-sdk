<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsResourceUsageResponseBody;

use AlibabaCloud\Tea\Model;

class ensResourceUsage extends Model
{
    /**
     * @var int
     */
    public $computeResourceCount;

    /**
     * @var int
     */
    public $cpuSum;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var int
     */
    public $downCount;

    /**
     * @var int
     */
    public $expiredCount;

    /**
     * @var int
     */
    public $expiringCount;

    /**
     * @var int
     */
    public $gpuSum;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var int
     */
    public $storageSum;
    protected $_name = [
        'computeResourceCount' => 'ComputeResourceCount',
        'cpuSum'               => 'CpuSum',
        'diskCount'            => 'DiskCount',
        'downCount'            => 'DownCount',
        'expiredCount'         => 'ExpiredCount',
        'expiringCount'        => 'ExpiringCount',
        'gpuSum'               => 'GpuSum',
        'instanceCount'        => 'InstanceCount',
        'runningCount'         => 'RunningCount',
        'serviceType'          => 'ServiceType',
        'storageSum'           => 'StorageSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeResourceCount) {
            $res['ComputeResourceCount'] = $this->computeResourceCount;
        }
        if (null !== $this->cpuSum) {
            $res['CpuSum'] = $this->cpuSum;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->downCount) {
            $res['DownCount'] = $this->downCount;
        }
        if (null !== $this->expiredCount) {
            $res['ExpiredCount'] = $this->expiredCount;
        }
        if (null !== $this->expiringCount) {
            $res['ExpiringCount'] = $this->expiringCount;
        }
        if (null !== $this->gpuSum) {
            $res['GpuSum'] = $this->gpuSum;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->storageSum) {
            $res['StorageSum'] = $this->storageSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensResourceUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeResourceCount'])) {
            $model->computeResourceCount = $map['ComputeResourceCount'];
        }
        if (isset($map['CpuSum'])) {
            $model->cpuSum = $map['CpuSum'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['DownCount'])) {
            $model->downCount = $map['DownCount'];
        }
        if (isset($map['ExpiredCount'])) {
            $model->expiredCount = $map['ExpiredCount'];
        }
        if (isset($map['ExpiringCount'])) {
            $model->expiringCount = $map['ExpiringCount'];
        }
        if (isset($map['GpuSum'])) {
            $model->gpuSum = $map['GpuSum'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['StorageSum'])) {
            $model->storageSum = $map['StorageSum'];
        }

        return $model;
    }
}
