<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles;

use AlibabaCloud\Tea\Model;

class desktopTypeAttribute extends Model
{
    /**
     * @description The number of vCPUs.
     *
     * @example 10
     *
     * @var int
     */
    public $cpuCount;

    /**
     * @description The number of GPUs.
     *
     * @example 0.5
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The type of the GPU.
     *
     * @example NVIDIA T4
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description The size of the memory. Unit: MB.
     *
     * @example 47104
     *
     * @var int
     */
    public $memorySize;
    protected $_name = [
        'cpuCount'   => 'CpuCount',
        'gpuCount'   => 'GpuCount',
        'gpuSpec'    => 'GpuSpec',
        'memorySize' => 'MemorySize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopTypeAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        return $model;
    }
}
