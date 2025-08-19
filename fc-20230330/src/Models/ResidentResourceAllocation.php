<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ResidentResourceAllocation extends Model
{
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var float
     */
    public $totalCpuCores;

    /**
     * @var float
     */
    public $totalDiskSize;

    /**
     * @var float
     */
    public $totalGpuMemorySize;

    /**
     * @var float
     */
    public $totalMemorySize;
    protected $_name = [
        'functionName' => 'functionName',
        'instanceCount' => 'instanceCount',
        'qualifier' => 'qualifier',
        'totalCpuCores' => 'totalCpuCores',
        'totalDiskSize' => 'totalDiskSize',
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
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->instanceCount) {
            $res['instanceCount'] = $this->instanceCount;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->totalCpuCores) {
            $res['totalCpuCores'] = $this->totalCpuCores;
        }

        if (null !== $this->totalDiskSize) {
            $res['totalDiskSize'] = $this->totalDiskSize;
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
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['instanceCount'])) {
            $model->instanceCount = $map['instanceCount'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['totalCpuCores'])) {
            $model->totalCpuCores = $map['totalCpuCores'];
        }

        if (isset($map['totalDiskSize'])) {
            $model->totalDiskSize = $map['totalDiskSize'];
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
