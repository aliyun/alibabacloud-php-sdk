<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponseBody;

use AlibabaCloud\Tea\Model;

class desktopTypes extends Model
{
    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var string
     */
    public $cpuCount;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 150
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @description The ID of the cloud desktop type.
     *
     * @example ecd.graphics.xlarge
     *
     * @var string
     */
    public $desktopTypeId;

    /**
     * @description The status of the cloud desktop type. If SUFFICIENT is returned, the number of cloud desktops of the type is sufficient.
     *
     * @example SUFFICIENT
     *
     * @var string
     */
    public $desktopTypeStatus;

    /**
     * @description The number of GPUs.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The GPU memory size. Unit: MB. This parameter applies to GPU-enabled cloud computers only.
     *
     * @example 2048
     *
     * @var int
     */
    public $gpuMemory;

    /**
     * @description The GPU memory.
     *
     * @example 16 GiB
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description The family of the cloud desktop type.
     *
     * @example ecd.graphics
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The number of sessions supported by the current specification.
     *
     * @example 4
     *
     * @var int
     */
    public $maxSessionCount;

    /**
     * @description The memory size. Unit: MiB.
     *
     * @example 23552
     *
     * @var string
     */
    public $memorySize;

    /**
     * @description The array of sales modes.
     *
     * @var string[]
     */
    public $scopes;

    /**
     * @description The stock status.
     *
     * @example Sufficient
     *
     * @var string
     */
    public $stockState;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     * @example 150
     *
     * @var string
     */
    public $systemDiskSize;
    protected $_name = [
        'cpuCount'           => 'CpuCount',
        'dataDiskSize'       => 'DataDiskSize',
        'desktopTypeId'      => 'DesktopTypeId',
        'desktopTypeStatus'  => 'DesktopTypeStatus',
        'gpuCount'           => 'GpuCount',
        'gpuMemory'          => 'GpuMemory',
        'gpuSpec'            => 'GpuSpec',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'maxSessionCount'    => 'MaxSessionCount',
        'memorySize'         => 'MemorySize',
        'scopes'             => 'Scopes',
        'stockState'         => 'StockState',
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
        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->maxSessionCount) {
            $res['MaxSessionCount'] = $this->maxSessionCount;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->scopes) {
            $res['Scopes'] = $this->scopes;
        }
        if (null !== $this->stockState) {
            $res['StockState'] = $this->stockState;
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
        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['MaxSessionCount'])) {
            $model->maxSessionCount = $map['MaxSessionCount'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['Scopes'])) {
            if (!empty($map['Scopes'])) {
                $model->scopes = $map['Scopes'];
            }
        }
        if (isset($map['StockState'])) {
            $model->stockState = $map['StockState'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
