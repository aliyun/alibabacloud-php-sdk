<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponse;

use AlibabaCloud\Tea\Model;

class desktopTypes extends Model
{
    /**
     * @var string
     */
    public $desktopTypeId;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $GPUCount;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $dataDiskSize;
    protected $_name = [
        'desktopTypeId'      => 'DesktopTypeId',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'cpuCount'           => 'CpuCount',
        'GPUCount'           => 'GPUCount',
        'memorySize'         => 'MemorySize',
        'systemDiskSize'     => 'SystemDiskSize',
        'dataDiskSize'       => 'DataDiskSize',
    ];

    public function validate()
    {
        Model::validateRequired('desktopTypeId', $this->desktopTypeId, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
        Model::validateRequired('cpuCount', $this->cpuCount, true);
        Model::validateRequired('GPUCount', $this->GPUCount, true);
        Model::validateRequired('memorySize', $this->memorySize, true);
        Model::validateRequired('systemDiskSize', $this->systemDiskSize, true);
        Model::validateRequired('dataDiskSize', $this->dataDiskSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopTypeId) {
            $res['DesktopTypeId'] = $this->desktopTypeId;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->GPUCount) {
            $res['GPUCount'] = $this->GPUCount;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
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
        if (isset($map['DesktopTypeId'])) {
            $model->desktopTypeId = $map['DesktopTypeId'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['GPUCount'])) {
            $model->GPUCount = $map['GPUCount'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        return $model;
    }
}
