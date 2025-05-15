<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\envParams\resourceNodes;

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
     * @var string[]
     */
    public $extendParam;

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
     * @var resourceNodes[]
     */
    public $resourceNodes;

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
        'extendParam' => 'ExtendParam',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'gpuPerWorker' => 'GpuPerWorker',
        'memoryPerWorker' => 'MemoryPerWorker',
        'NCCLVersion' => 'NCCLVersion',
        'pyTorchVersion' => 'PyTorchVersion',
        'resourceNodes' => 'ResourceNodes',
        'shareMemory' => 'ShareMemory',
        'workerNum' => 'WorkerNum',
    ];

    public function validate()
    {
        if (\is_array($this->extendParam)) {
            Model::validateArray($this->extendParam);
        }
        if (\is_array($this->resourceNodes)) {
            Model::validateArray($this->resourceNodes);
        }
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

        if (null !== $this->extendParam) {
            if (\is_array($this->extendParam)) {
                $res['ExtendParam'] = [];
                foreach ($this->extendParam as $key1 => $value1) {
                    $res['ExtendParam'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->resourceNodes)) {
                $res['ResourceNodes'] = [];
                $n1 = 0;
                foreach ($this->resourceNodes as $item1) {
                    $res['ResourceNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ExtendParam'])) {
            if (!empty($map['ExtendParam'])) {
                $model->extendParam = [];
                foreach ($map['ExtendParam'] as $key1 => $value1) {
                    $model->extendParam[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['ResourceNodes'] as $item1) {
                    $model->resourceNodes[$n1++] = resourceNodes::fromMap($item1);
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
