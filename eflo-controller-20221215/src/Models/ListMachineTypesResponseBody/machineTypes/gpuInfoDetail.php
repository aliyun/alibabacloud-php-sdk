<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;

use AlibabaCloud\Dara\Model;

class gpuInfoDetail extends Model
{
    /**
     * @var int
     */
    public $gpuCount;

    /**
     * @var int
     */
    public $gpuMemoryInGB;

    /**
     * @var string
     */
    public $gpuName;

    /**
     * @var string
     */
    public $gpuVendor;

    /**
     * @var int
     */
    public $totalGpuMemoryInGB;
    protected $_name = [
        'gpuCount' => 'GpuCount',
        'gpuMemoryInGB' => 'GpuMemoryInGB',
        'gpuName' => 'GpuName',
        'gpuVendor' => 'GpuVendor',
        'totalGpuMemoryInGB' => 'TotalGpuMemoryInGB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }

        if (null !== $this->gpuMemoryInGB) {
            $res['GpuMemoryInGB'] = $this->gpuMemoryInGB;
        }

        if (null !== $this->gpuName) {
            $res['GpuName'] = $this->gpuName;
        }

        if (null !== $this->gpuVendor) {
            $res['GpuVendor'] = $this->gpuVendor;
        }

        if (null !== $this->totalGpuMemoryInGB) {
            $res['TotalGpuMemoryInGB'] = $this->totalGpuMemoryInGB;
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
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }

        if (isset($map['GpuMemoryInGB'])) {
            $model->gpuMemoryInGB = $map['GpuMemoryInGB'];
        }

        if (isset($map['GpuName'])) {
            $model->gpuName = $map['GpuName'];
        }

        if (isset($map['GpuVendor'])) {
            $model->gpuVendor = $map['GpuVendor'];
        }

        if (isset($map['TotalGpuMemoryInGB'])) {
            $model->totalGpuMemoryInGB = $map['TotalGpuMemoryInGB'];
        }

        return $model;
    }
}
