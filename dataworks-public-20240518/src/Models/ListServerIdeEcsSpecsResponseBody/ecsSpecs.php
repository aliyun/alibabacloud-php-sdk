<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListServerIdeEcsSpecsResponseBody;

use AlibabaCloud\Dara\Model;

class ecsSpecs extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var float
     */
    public $cu;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var float
     */
    public $gpuMemorySize;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'cpu' => 'Cpu',
        'cu' => 'Cu',
        'gpu' => 'Gpu',
        'gpuMemorySize' => 'GpuMemorySize',
        'gpuType' => 'GpuType',
        'instanceType' => 'InstanceType',
        'isAvailable' => 'IsAvailable',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }

        if (null !== $this->gpuMemorySize) {
            $res['GpuMemorySize'] = $this->gpuMemorySize;
        }

        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }

        if (isset($map['GpuMemorySize'])) {
            $model->gpuMemorySize = $map['GpuMemorySize'];
        }

        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
