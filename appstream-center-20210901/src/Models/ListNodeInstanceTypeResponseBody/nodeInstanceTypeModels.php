<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponseBody;

use AlibabaCloud\Tea\Model;

class nodeInstanceTypeModels extends Model
{
    /**
     * @description The number of vCPUs.
     *
     * @example 4
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The number of GPUs.
     *
     * @example 2
     *
     * @var string
     */
    public $gpu;

    /**
     * @description The GPU size. Unit: MB.
     *
     * @example 8192
     *
     * @var int
     */
    public $gpuMemory;

    /**
     * @description The maximum number of sessions to which a resource can connect at the same time. If a resource connects to a large number of sessions at the same time, user experience can be compromised. The value range varies based on the resource type. The following items describe the value ranges of different resource types:
     *
     *   appstreaming.general.4c8g: 1 to 2
     *   appstreaming.general.8c16g: 1 to 4
     *   appstreaming.vgpu.8c16g.4g: 1 to 4
     *   appstreaming.vgpu.8c31g.16g: 1 to 4
     *   appstreaming.vgpu.14c93g.12g: 1 to 6
     *
     * @example 4
     *
     * @var int
     */
    public $maxCapacity;

    /**
     * @description The memory size. Unit: MB.
     *
     * @example 8192
     *
     * @var int
     */
    public $memory;

    /**
     * @description The ID of the resource type.
     *
     * @example appstreaming.vgpu.4c8g.2g
     *
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @description The resource type family.
     *
     * Valid values:
     *
     *   appstreaming.general: WUYING - General
     *   appstreaming.vgpu: WUYING - Graphics
     *
     * @example appstreaming.vgpu
     *
     * @var string
     */
    public $nodeInstanceTypeFamily;

    /**
     * @description The name of the resource type.
     *
     * @example WUYING - General - 4 vCPUs 8 GB Memory
     *
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
