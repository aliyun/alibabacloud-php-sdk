<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UserViewMetric extends Model
{
    /**
     * @var int
     */
    public $CPUNodeNumber;

    /**
     * @var string
     */
    public $CPUUsageRate;

    /**
     * @var string[]
     */
    public $cpuJobNames;

    /**
     * @var string[]
     */
    public $cpuNodeNames;

    /**
     * @var string
     */
    public $diskReadRate;

    /**
     * @var string
     */
    public $diskWriteRate;

    /**
     * @var int
     */
    public $GPUNodeNumber;

    /**
     * @var string
     */
    public $GPUUsageRate;

    /**
     * @var string[]
     */
    public $gpuJobNames;

    /**
     * @var string[]
     */
    public $gpuNodeNames;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $memoryUsageRate;

    /**
     * @var string
     */
    public $networkInputRate;

    /**
     * @var string
     */
    public $networkOutputRate;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var int
     */
    public $requestCPU;

    /**
     * @var int
     */
    public $requestGPU;

    /**
     * @var int
     */
    public $requestMemory;

    /**
     * @example rg17tmvwiokhzaxg
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $totalCPU;

    /**
     * @var int
     */
    public $totalGPU;

    /**
     * @var int
     */
    public $totalMemory;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'CPUNodeNumber'     => 'CPUNodeNumber',
        'CPUUsageRate'      => 'CPUUsageRate',
        'cpuJobNames'       => 'CpuJobNames',
        'cpuNodeNames'      => 'CpuNodeNames',
        'diskReadRate'      => 'DiskReadRate',
        'diskWriteRate'     => 'DiskWriteRate',
        'GPUNodeNumber'     => 'GPUNodeNumber',
        'GPUUsageRate'      => 'GPUUsageRate',
        'gpuJobNames'       => 'GpuJobNames',
        'gpuNodeNames'      => 'GpuNodeNames',
        'jobType'           => 'JobType',
        'memoryUsageRate'   => 'MemoryUsageRate',
        'networkInputRate'  => 'NetworkInputRate',
        'networkOutputRate' => 'NetworkOutputRate',
        'nodeNames'         => 'NodeNames',
        'requestCPU'        => 'RequestCPU',
        'requestGPU'        => 'RequestGPU',
        'requestMemory'     => 'RequestMemory',
        'resourceGroupId'   => 'ResourceGroupId',
        'totalCPU'          => 'TotalCPU',
        'totalGPU'          => 'TotalGPU',
        'totalMemory'       => 'TotalMemory',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUNodeNumber) {
            $res['CPUNodeNumber'] = $this->CPUNodeNumber;
        }
        if (null !== $this->CPUUsageRate) {
            $res['CPUUsageRate'] = $this->CPUUsageRate;
        }
        if (null !== $this->cpuJobNames) {
            $res['CpuJobNames'] = $this->cpuJobNames;
        }
        if (null !== $this->cpuNodeNames) {
            $res['CpuNodeNames'] = $this->cpuNodeNames;
        }
        if (null !== $this->diskReadRate) {
            $res['DiskReadRate'] = $this->diskReadRate;
        }
        if (null !== $this->diskWriteRate) {
            $res['DiskWriteRate'] = $this->diskWriteRate;
        }
        if (null !== $this->GPUNodeNumber) {
            $res['GPUNodeNumber'] = $this->GPUNodeNumber;
        }
        if (null !== $this->GPUUsageRate) {
            $res['GPUUsageRate'] = $this->GPUUsageRate;
        }
        if (null !== $this->gpuJobNames) {
            $res['GpuJobNames'] = $this->gpuJobNames;
        }
        if (null !== $this->gpuNodeNames) {
            $res['GpuNodeNames'] = $this->gpuNodeNames;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->memoryUsageRate) {
            $res['MemoryUsageRate'] = $this->memoryUsageRate;
        }
        if (null !== $this->networkInputRate) {
            $res['NetworkInputRate'] = $this->networkInputRate;
        }
        if (null !== $this->networkOutputRate) {
            $res['NetworkOutputRate'] = $this->networkOutputRate;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestGPU) {
            $res['RequestGPU'] = $this->requestGPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->totalCPU) {
            $res['TotalCPU'] = $this->totalCPU;
        }
        if (null !== $this->totalGPU) {
            $res['TotalGPU'] = $this->totalGPU;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserViewMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUNodeNumber'])) {
            $model->CPUNodeNumber = $map['CPUNodeNumber'];
        }
        if (isset($map['CPUUsageRate'])) {
            $model->CPUUsageRate = $map['CPUUsageRate'];
        }
        if (isset($map['CpuJobNames'])) {
            if (!empty($map['CpuJobNames'])) {
                $model->cpuJobNames = $map['CpuJobNames'];
            }
        }
        if (isset($map['CpuNodeNames'])) {
            if (!empty($map['CpuNodeNames'])) {
                $model->cpuNodeNames = $map['CpuNodeNames'];
            }
        }
        if (isset($map['DiskReadRate'])) {
            $model->diskReadRate = $map['DiskReadRate'];
        }
        if (isset($map['DiskWriteRate'])) {
            $model->diskWriteRate = $map['DiskWriteRate'];
        }
        if (isset($map['GPUNodeNumber'])) {
            $model->GPUNodeNumber = $map['GPUNodeNumber'];
        }
        if (isset($map['GPUUsageRate'])) {
            $model->GPUUsageRate = $map['GPUUsageRate'];
        }
        if (isset($map['GpuJobNames'])) {
            if (!empty($map['GpuJobNames'])) {
                $model->gpuJobNames = $map['GpuJobNames'];
            }
        }
        if (isset($map['GpuNodeNames'])) {
            if (!empty($map['GpuNodeNames'])) {
                $model->gpuNodeNames = $map['GpuNodeNames'];
            }
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MemoryUsageRate'])) {
            $model->memoryUsageRate = $map['MemoryUsageRate'];
        }
        if (isset($map['NetworkInputRate'])) {
            $model->networkInputRate = $map['NetworkInputRate'];
        }
        if (isset($map['NetworkOutputRate'])) {
            $model->networkOutputRate = $map['NetworkOutputRate'];
        }
        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = $map['NodeNames'];
            }
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestGPU'])) {
            $model->requestGPU = $map['RequestGPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TotalCPU'])) {
            $model->totalCPU = $map['TotalCPU'];
        }
        if (isset($map['TotalGPU'])) {
            $model->totalGPU = $map['TotalGPU'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
