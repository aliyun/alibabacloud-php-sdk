<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $gpuMemory;
    /**
     * @var string
     */
    public $gpuSpec;
    /**
     * @var string
     */
    public $instanceTypeFamily;
    /**
     * @var int
     */
    public $maxSessionCount;
    /**
     * @var string
     */
    public $memorySize;
    /**
     * @var string[]
     */
    public $scopes;
    /**
     * @var string
     */
    public $stockState;
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
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scopes)) {
                $res['Scopes'] = [];
                $n1            = 0;
                foreach ($this->scopes as $item1) {
                    $res['Scopes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stockState) {
            $res['StockState'] = $this->stockState;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
                $model->scopes = [];
                $n1            = 0;
                foreach ($map['Scopes'] as $item1) {
                    $model->scopes[$n1++] = $item1;
                }
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
