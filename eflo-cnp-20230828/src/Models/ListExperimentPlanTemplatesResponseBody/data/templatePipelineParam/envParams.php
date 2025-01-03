<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesResponseBody\data\templatePipelineParam;

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
     * @description GPU allocation
     *
     * @example 8
     *
     * @var int
     */
    public $gpuPerWorker;

    /**
     * @description Allocated memory in GB
     *
     * @example 500
     *
     * @var int
     */
    public $memoryPerWorker;

    /**
     * @description Allocated shared memory in GB
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
        'cpuPerWorker'    => 'CpuPerWorker',
        'gpuPerWorker'    => 'GpuPerWorker',
        'memoryPerWorker' => 'MemoryPerWorker',
        'shareMemory'     => 'ShareMemory',
        'workerNum'       => 'WorkerNum',
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
        if (null !== $this->gpuPerWorker) {
            $res['GpuPerWorker'] = $this->gpuPerWorker;
        }
        if (null !== $this->memoryPerWorker) {
            $res['MemoryPerWorker'] = $this->memoryPerWorker;
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
        if (isset($map['GpuPerWorker'])) {
            $model->gpuPerWorker = $map['GpuPerWorker'];
        }
        if (isset($map['MemoryPerWorker'])) {
            $model->memoryPerWorker = $map['MemoryPerWorker'];
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
