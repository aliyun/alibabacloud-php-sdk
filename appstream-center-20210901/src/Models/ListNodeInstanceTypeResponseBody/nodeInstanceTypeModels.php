<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponseBody;

use AlibabaCloud\Tea\Model;

class nodeInstanceTypeModels extends Model
{
    /**
     * @example 4
     *
     * @var string
     */
    public $cpu;

    /**
     * @example 2
     *
     * @var string
     */
    public $gpu;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var int
     */
    public $maxCapacity;

    /**
     * @example 8192
     *
     * @var int
     */
    public $memory;

    /**
     * @example appstreaming.vgpu.4c8g.2g
     *
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @example appstreaming.vgpu
     *
     * @var string
     */
    public $nodeInstanceTypeFamily;

    /**
     * @var string
     */
    public $nodeTypeName;
    protected $_name = [
        'cpu'                    => 'Cpu',
        'gpu'                    => 'Gpu',
        'gpuMemory'              => 'GpuMemory',
        'maxCapacity'            => 'MaxCapacity',
        'memory'                 => 'Memory',
        'nodeInstanceType'       => 'NodeInstanceType',
        'nodeInstanceTypeFamily' => 'NodeInstanceTypeFamily',
        'nodeTypeName'           => 'NodeTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }
        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
        }
        if (null !== $this->nodeInstanceTypeFamily) {
            $res['NodeInstanceTypeFamily'] = $this->nodeInstanceTypeFamily;
        }
        if (null !== $this->nodeTypeName) {
            $res['NodeTypeName'] = $this->nodeTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInstanceTypeModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }
        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
        }
        if (isset($map['NodeInstanceTypeFamily'])) {
            $model->nodeInstanceTypeFamily = $map['NodeInstanceTypeFamily'];
        }
        if (isset($map['NodeTypeName'])) {
            $model->nodeTypeName = $map['NodeTypeName'];
        }

        return $model;
    }
}
