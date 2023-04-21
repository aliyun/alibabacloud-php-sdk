<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopTypesRequest extends Model
{
    /**
     * @description The applicable scope of the desktop type. Default value: `Public`.
     *
     * @example Public
     *
     * @var string
     */
    public $appliedScope;

    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuCount;

    /**
     * @description The ID of the cloud desktop whose desktop type that you want to modify. If you specify this parameter, the information that is returned includes whether the desktop type is compatible with the cloud desktop.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopIdForModify;

    /**
     * @description The ID of the desktop type. Valid values:
     *
     *   eds.graphics.16c1t4
     *   eds.graphics.24c1t4
     *   eds.hf.12c24g
     *   eds.hf.8c16g
     *   eds.hf.4c8g
     *   eds.general.8c32g
     *   eds.general.16c32g
     *   eds.general.8c16g
     *   eds.general.4c16g
     *   eds.general.4c8g
     *   eds.general.2c8g
     *   eds.general.2c4g
     *   eds.general.2c2g
     *   ecd.graphics.xlarge
     *   ecd.graphics.2xlarge
     *   ecd.performance.2xlarge
     *   ecd.advanced.xlarge
     *   ecd.advanced.large
     *   ecd.basic.large
     *   ecd.basic.small
     *
     * > When no values are specified for the `InstanceTypeFamily` and `DesktopTypeId` parameters for a cloud desktop, all desktop types are queried.
     * @example ecd.graphics.xlarge
     *
     * @var string
     */
    public $desktopTypeId;

    /**
     * @description The number of GPUs.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The family of the cloud desktop type. Valid values:
     *
     *   eds.graphics
     *   eds.hf
     *   eds.general
     *   ecd.graphics
     *   ecd.performance
     *   ecd.advanced
     *   ecd.basic
     *
     * > When no values are specified for the `InstanceTypeFamily` and `DesktopTypeId` parameters for a cloud desktop, all desktop types are queried.
     * @example ecd.graphics
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The size of the memory. Unit: GiB.
     *
     * @example 4
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description The type of the order that you want to place.
     *
     * @example DOWNGRADE
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
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
