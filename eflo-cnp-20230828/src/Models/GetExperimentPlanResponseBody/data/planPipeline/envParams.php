<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponseBody\data\planPipeline;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentPlanResponseBody\data\planPipeline\envParams\resourceNodes;
use AlibabaCloud\Tea\Model;

class envParams extends Model
{
    /**
     * @description CPU allocation
     *
     * @example 90
     *
     * @var int
     */
    public $cpuPerWorker;

    /**
     * @description CUDA version
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $cudaVersion;

    /**
     * @description Additional parameters
     *
     * @var string[]
     */
    public $extendParam;

    /**
     * @description GPU driver version
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description Number of GPUs allocated
     *
     * @example 8
     *
     * @var int
     */
    public $gpuPerWorker;

    /**
     * @description Memory GB allocation
     *
     * @example 500
     *
     * @var int
     */
    public $memoryPerWorker;

    /**
     * @description NCCL version
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $NCCLVersion;

    /**
     * @description PyTorch version
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $pyTorchVersion;

    /**
     * @description Specified nodes
     *
     * @var resourceNodes[]
     */
    public $resourceNodes;

    /**
     * @description Shared memory GB allocation
     *
     * @example 500
     *
     * @var int
     */
    public $shareMemory;

    /**
     * @description Number of nodes
     *
     * @example 1
     *
     * @var int
     */
    public $workerNum;
    protected $_name = [
        'cpuPerWorker'     => 'CpuPerWorker',
        'cudaVersion'      => 'CudaVersion',
        'extendParam'      => 'ExtendParam',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'gpuPerWorker'     => 'GpuPerWorker',
        'memoryPerWorker'  => 'MemoryPerWorker',
        'NCCLVersion'      => 'NCCLVersion',
        'pyTorchVersion'   => 'PyTorchVersion',
        'resourceNodes'    => 'ResourceNodes',
        'shareMemory'      => 'ShareMemory',
        'workerNum'        => 'WorkerNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuPerWorker) {
            $res['CpuPerWorker'] = $this->cpuPerWorker;
        }
        if (null !== $this->cudaVersion) {
            $res['CudaVersion'] = $this->cudaVersion;
        }
        if (null !== $this->extendParam) {
            $res['ExtendParam'] = $this->extendParam;
        }
        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }
        if (null !== $this->gpuPerWorker) {
            $res['GpuPerWorker'] = $this->gpuPerWorker;
        }
        if (null !== $this->memoryPerWorker) {
            $res['MemoryPerWorker'] = $this->memoryPerWorker;
        }
        if (null !== $this->NCCLVersion) {
            $res['NCCLVersion'] = $this->NCCLVersion;
        }
        if (null !== $this->pyTorchVersion) {
            $res['PyTorchVersion'] = $this->pyTorchVersion;
        }
        if (null !== $this->resourceNodes) {
            $res['ResourceNodes'] = [];
            if (null !== $this->resourceNodes && \is_array($this->resourceNodes)) {
                $n = 0;
                foreach ($this->resourceNodes as $item) {
                    $res['ResourceNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->shareMemory) {
            $res['ShareMemory'] = $this->shareMemory;
        }
        if (null !== $this->workerNum) {
            $res['WorkerNum'] = $this->workerNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuPerWorker'])) {
            $model->cpuPerWorker = $map['CpuPerWorker'];
        }
        if (isset($map['CudaVersion'])) {
            $model->cudaVersion = $map['CudaVersion'];
        }
        if (isset($map['ExtendParam'])) {
            $model->extendParam = $map['ExtendParam'];
        }
        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }
        if (isset($map['GpuPerWorker'])) {
            $model->gpuPerWorker = $map['GpuPerWorker'];
        }
        if (isset($map['MemoryPerWorker'])) {
            $model->memoryPerWorker = $map['MemoryPerWorker'];
        }
        if (isset($map['NCCLVersion'])) {
            $model->NCCLVersion = $map['NCCLVersion'];
        }
        if (isset($map['PyTorchVersion'])) {
            $model->pyTorchVersion = $map['PyTorchVersion'];
        }
        if (isset($map['ResourceNodes'])) {
            if (!empty($map['ResourceNodes'])) {
                $model->resourceNodes = [];
                $n                    = 0;
                foreach ($map['ResourceNodes'] as $item) {
                    $model->resourceNodes[$n++] = null !== $item ? resourceNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ShareMemory'])) {
            $model->shareMemory = $map['ShareMemory'];
        }
        if (isset($map['WorkerNum'])) {
            $model->workerNum = $map['WorkerNum'];
        }

        return $model;
    }
}
