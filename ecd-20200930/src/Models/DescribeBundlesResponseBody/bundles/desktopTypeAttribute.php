<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles;

use AlibabaCloud\Dara\Model;

class desktopTypeAttribute extends Model
{
    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $memorySize;
    protected $_name = [
        'cpuCount' => 'CpuCount',
        'gpuCount' => 'GpuCount',
        'gpuSpec' => 'GpuSpec',
        'memorySize' => 'MemorySize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
