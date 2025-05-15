<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\UpdateExperimentPlanTemplateRequest\templatePipeline;

use AlibabaCloud\Dara\Model;

class envParams extends Model
{
    /**
     * @var int
     */
    public $cpuPerWorker;

    /**
     * @var string
     */
    public $cudaVersion;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var int
     */
    public $gpuPerWorker;

    /**
     * @var int
     */
    public $memoryPerWorker;

    /**
     * @var string
     */
    public $NCCLVersion;

    /**
     * @var string
     */
    public $pyTorchVersion;

    /**
     * @var int
     */
    public $shareMemory;

    /**
     * @var int
     */
    public $workerNum;
    protected $_name = [
        'cpuPerWorker' => 'CpuPerWorker',
        'cudaVersion' => 'CudaVersion',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'gpuPerWorker' => 'GpuPerWorker',
        'memoryPerWorker' => 'MemoryPerWorker',
        'NCCLVersion' => 'NCCLVersion',
        'pyTorchVersion' => 'PyTorchVersion',
        'shareMemory' => 'ShareMemory',
        'workerNum' => 'WorkerNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuPerWorker) {
            $res['CpuPerWorker'] = $this->cpuPerWorker;
        }

        if (null !== $this->cudaVersion) {
            $res['CudaVersion'] = $this->cudaVersion;
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

        if (null !== $this->shareMemory) {
            $res['ShareMemory'] = $this->shareMemory;
        }

        if (null !== $this->workerNum) {
            $res['WorkerNum'] = $this->workerNum;
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
        if (isset($map['CpuPerWorker'])) {
            $model->cpuPerWorker = $map['CpuPerWorker'];
        }

        if (isset($map['CudaVersion'])) {
            $model->cudaVersion = $map['CudaVersion'];
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

        if (isset($map['ShareMemory'])) {
            $model->shareMemory = $map['ShareMemory'];
        }

        if (isset($map['WorkerNum'])) {
            $model->workerNum = $map['WorkerNum'];
        }

        return $model;
    }
}
