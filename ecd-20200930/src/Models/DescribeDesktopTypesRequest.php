<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopTypesRequest extends Model
{
    /**
     * @var string
     */
    public $appliedScope;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $desktopIdForModify;

    /**
     * @var string
     */
    public $desktopTypeId;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appliedScope'       => 'AppliedScope',
        'cpuCount'           => 'CpuCount',
        'desktopIdForModify' => 'DesktopIdForModify',
        'desktopTypeId'      => 'DesktopTypeId',
        'gpuCount'           => 'GpuCount',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'memorySize'         => 'MemorySize',
        'orderType'          => 'OrderType',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedScope) {
            $res['AppliedScope'] = $this->appliedScope;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->desktopIdForModify) {
            $res['DesktopIdForModify'] = $this->desktopIdForModify;
        }
        if (null !== $this->desktopTypeId) {
            $res['DesktopTypeId'] = $this->desktopTypeId;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedScope'])) {
            $model->appliedScope = $map['AppliedScope'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['DesktopIdForModify'])) {
            $model->desktopIdForModify = $map['DesktopIdForModify'];
        }
        if (isset($map['DesktopTypeId'])) {
            $model->desktopTypeId = $map['DesktopTypeId'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
