<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopTypesRequest extends Model
{
    /**
     * @description Applicable Scope of specifications. Default value: `Public`
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
     * @description The ID of the cloud computer share you want to modify. If this parameter is provided, the response will include compatibility information for the specified specification.
     *
     * @example dg-abcdefg****
     *
     * @var string
     */
    public $desktopGroupIdForModify;

    /**
     * @description The ID of the cloud computer when you change instance types of cloud computers. If you specify this parameter, the information about whether the instance type is compatible with the cloud computer is included in the response.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopIdForModify;

    /**
     * @description The specification ID.
     *
     * >  If both `InstanceTypeFamily` and `DesktopTypeId` are empty, all cloud computer specifications will be queried.
     *
     * Valid values:
     *
     *   eds.enterprise_office.4c8g
     *   eds.hf.4c8g
     *   ecd.basic.large
     *   ecd.advanced.large
     *   eds.enterprise_office.8c16g
     *   ecd.basic.small
     *   ecd.graphics.2xlarge
     *   eds.hf.8c16g
     *   eds.hf.12c24g
     *   eds.general.8c16g
     *   eds.general.16c32g
     *   ecd.advanced.xlarge
     *   eds.graphics.16c1t4
     *   ecd.graphics.xlarge
     *   ecd.performance.2xlarge
     *   eds.general.8c32g
     *   eds.general.2c2g
     *   eds.general.2c4g
     *   eds.graphics.24c1t4
     *   eds.general.4c8g
     *   eds.enterprise_office.2c4g
     *   eds.general.4c16g
     *   eds.general.2c8g
     *
     * @example ecd.graphics.xlarge
     *
     * @var string
     */
    public $desktopTypeId;

    /**
     * @description The specification IDs.
     *
     * @var string[]
     */
    public $desktopTypeIdList;

    /**
     * @description The number of GPUs.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The GPU driver type.
     *
     * Valid values:
     *
     *   T4
     *   A10
     *   G28
     *   G39
     *
     * @example A10
     *
     * @var string
     */
    public $gpuDriverType;

    /**
     * @description The GPU memory size. Unit: MB.
     *
     * @example 2048
     *
     * @var int
     */
    public $gpuMemory;

    /**
     * @description The name of the specification family.
     *
     * >  If both `InstanceTypeFamily` and `DesktopTypeId` are empty, all specification families will be queried.
     *
     * Valid values:
     *
     *   ecd.advanced
     *   eds.graphics
     *   ecd.basic
     *   eds.enterprise_office
     *   eds.hf
     *   ecd.graphics
     *   eds.general
     *   ecd.performance
     *
     * @example ecd.graphics
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The memory size. Unit: MiB.
     *
     * @example 4
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description The sorting field. If this parameter is not provided, results are sorted by creation time in descending order.
     *
     * Valid values:
     *
     *   Memory: sorts by memory size.
     *   Cpu: sorts by the number of vCPUs.
     *
     * @example Memory
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The order type.
     *
     * @example DOWNGRADE
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The sales mode of the specification.
     *
     * Valid values:
     *
     *   MonthPackage: the monthly subscription mode.
     *   FastBuy: the quick purchase mode.
     *
     * @example FastBuy
     *
     * @var string
     */
    public $scope;

    /**
     * @var string[]
     */
    public $scopeSet;

    /**
     * @description The sorting order.
     *
     * Valid values:
     *
     *   ASC (default): the ascending order.
     *   DESC: the descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $sortType;

    /**
     * @description The number of sessions supported by the specification.
     *
     * @example 2
     *
     * @var int
     */
    public $supportMinSessionCount;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appliedScope' => 'AppliedScope',
        'cpuCount' => 'CpuCount',
        'desktopGroupIdForModify' => 'DesktopGroupIdForModify',
        'desktopIdForModify' => 'DesktopIdForModify',
        'desktopTypeId' => 'DesktopTypeId',
        'desktopTypeIdList' => 'DesktopTypeIdList',
        'gpuCount' => 'GpuCount',
        'gpuDriverType' => 'GpuDriverType',
        'gpuMemory' => 'GpuMemory',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'memorySize' => 'MemorySize',
        'orderBy' => 'OrderBy',
        'orderType' => 'OrderType',
        'regionId' => 'RegionId',
        'scope' => 'Scope',
        'scopeSet' => 'ScopeSet',
        'sortType' => 'SortType',
        'supportMinSessionCount' => 'SupportMinSessionCount',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedScope) {
            $res['AppliedScope'] = $this->appliedScope;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->desktopGroupIdForModify) {
            $res['DesktopGroupIdForModify'] = $this->desktopGroupIdForModify;
        }
        if (null !== $this->desktopIdForModify) {
            $res['DesktopIdForModify'] = $this->desktopIdForModify;
        }
        if (null !== $this->desktopTypeId) {
            $res['DesktopTypeId'] = $this->desktopTypeId;
        }
        if (null !== $this->desktopTypeIdList) {
            $res['DesktopTypeIdList'] = $this->desktopTypeIdList;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuDriverType) {
            $res['GpuDriverType'] = $this->gpuDriverType;
        }
        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->scopeSet) {
            $res['ScopeSet'] = $this->scopeSet;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->supportMinSessionCount) {
            $res['SupportMinSessionCount'] = $this->supportMinSessionCount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['DesktopGroupIdForModify'])) {
            $model->desktopGroupIdForModify = $map['DesktopGroupIdForModify'];
        }
        if (isset($map['DesktopIdForModify'])) {
            $model->desktopIdForModify = $map['DesktopIdForModify'];
        }
        if (isset($map['DesktopTypeId'])) {
            $model->desktopTypeId = $map['DesktopTypeId'];
        }
        if (isset($map['DesktopTypeIdList'])) {
            if (!empty($map['DesktopTypeIdList'])) {
                $model->desktopTypeIdList = $map['DesktopTypeIdList'];
            }
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuDriverType'])) {
            $model->gpuDriverType = $map['GpuDriverType'];
        }
        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ScopeSet'])) {
            if (!empty($map['ScopeSet'])) {
                $model->scopeSet = $map['ScopeSet'];
            }
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['SupportMinSessionCount'])) {
            $model->supportMinSessionCount = $map['SupportMinSessionCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
