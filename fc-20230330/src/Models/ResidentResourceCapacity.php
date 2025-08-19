<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ResidentResourceCapacity extends Model
{
    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var int
     */
    public $totalCpuCores;

    /**
     * @var int
     */
    public $totalDiskSize;

    /**
     * @var int
     */
    public $totalGpuCards;

    /**
     * @var int
     */
    public $totalGpuMemorySize;

    /**
     * @var int
     */
    public $totalMemorySize;
    protected $_name = [
        'gpuType' => 'gpuType',
        'totalCpuCores' => 'totalCpuCores',
        'totalDiskSize' => 'totalDiskSize',
        'totalGpuCards' => 'totalGpuCards',
        'totalGpuMemorySize' => 'totalGpuMemorySize',
        'totalMemorySize' => 'totalMemorySize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuType) {
            $res['gpuType'] = $this->gpuType;
        }

        if (null !== $this->totalCpuCores) {
            $res['totalCpuCores'] = $this->totalCpuCores;
        }

        if (null !== $this->totalDiskSize) {
            $res['totalDiskSize'] = $this->totalDiskSize;
        }

        if (null !== $this->totalGpuCards) {
            $res['totalGpuCards'] = $this->totalGpuCards;
        }

        if (null !== $this->totalGpuMemorySize) {
            $res['totalGpuMemorySize'] = $this->totalGpuMemorySize;
        }

        if (null !== $this->totalMemorySize) {
            $res['totalMemorySize'] = $this->totalMemorySize;
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
        if (isset($map['gpuType'])) {
            $model->gpuType = $map['gpuType'];
        }

        if (isset($map['totalCpuCores'])) {
            $model->totalCpuCores = $map['totalCpuCores'];
        }

        if (isset($map['totalDiskSize'])) {
            $model->totalDiskSize = $map['totalDiskSize'];
        }

        if (isset($map['totalGpuCards'])) {
            $model->totalGpuCards = $map['totalGpuCards'];
        }

        if (isset($map['totalGpuMemorySize'])) {
            $model->totalGpuMemorySize = $map['totalGpuMemorySize'];
        }

        if (isset($map['totalMemorySize'])) {
            $model->totalMemorySize = $map['totalMemorySize'];
        }

        return $model;
    }
}
