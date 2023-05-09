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
     * @description 显卡内存大小，单位为MB。
     *
     * @example 8192
     *
     * @var int
     */
    public $gpuMemory;

    /**
     * @description 最大并发会话数，即单个资源可同时连接的会话数。如果同时连接的会话数过多，可能导致应用的使用体验下降。取值范围因资源规格不同而不同。各资源规格对应的取值范围分别是：
     *
     * - appstreaming.vgpu.14c93g.12g：1\~6；
     * @example 4
     *
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
     * @description 资源规格名称。
     *
     * @example 无影-通用型_4核8G
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
