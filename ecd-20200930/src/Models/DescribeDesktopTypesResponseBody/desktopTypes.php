<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponseBody;

use AlibabaCloud\Tea\Model;

class desktopTypes extends Model
{
    /**
     * @var string
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $desktopTypeId;

    /**
     * @var string
     */
    public $desktopTypeStatus;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $systemDiskSize;
    protected $_name = [
        'cpuCount'           => 'CpuCount',
        'dataDiskSize'       => 'DataDiskSize',
        'desktopTypeId'      => 'DesktopTypeId',
        'desktopTypeStatus'  => 'DesktopTypeStatus',
        'gpuCount'           => 'GpuCount',
        'gpuSpec'            => 'GpuSpec',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'memorySize'         => 'MemorySize',
        'systemDiskSize'     => 'SystemDiskSize',
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
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->desktopTypeId) {
            $res['DesktopTypeId'] = $this->desktopTypeId;
        }
        if (null !== $this->desktopTypeStatus) {
            $res['DesktopTypeStatus'] = $this->desktopTypeStatus;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DesktopTypeId'])) {
            $model->desktopTypeId = $map['DesktopTypeId'];
        }
        if (isset($map['DesktopTypeStatus'])) {
            $model->desktopTypeStatus = $map['DesktopTypeStatus'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
