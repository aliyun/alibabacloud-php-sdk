<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
    public $desktopGroupIdForModify;

    /**
     * @var string
     */
    public $desktopIdForModify;

    /**
     * @var string
     */
    public $desktopTypeId;

    /**
     * @var string[]
     */
    public $desktopTypeIdList;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuDriverType;

    /**
     * @var int
     */
    public $gpuMemory;

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
    public $officeSiteId;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string[]
     */
    public $scopeSet;

    /**
     * @var string
     */
    public $sortType;

    /**
     * @var int
     */
    public $supportMinSessionCount;

    /**
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
        'officeSiteId' => 'OfficeSiteId',
        'orderBy' => 'OrderBy',
        'orderType' => 'OrderType',
        'regionId' => 'RegionId',
        'scope' => 'Scope',
        'scopeSet' => 'ScopeSet',
        'sortType' => 'SortType',
        'supportMinSessionCount' => 'SupportMinSessionCount',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopTypeIdList)) {
            Model::validateArray($this->desktopTypeIdList);
        }
        if (\is_array($this->scopeSet)) {
            Model::validateArray($this->scopeSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->desktopTypeIdList)) {
                $res['DesktopTypeIdList'] = [];
                $n1 = 0;
                foreach ($this->desktopTypeIdList as $item1) {
                    $res['DesktopTypeIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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
            if (\is_array($this->scopeSet)) {
                $res['ScopeSet'] = [];
                $n1 = 0;
                foreach ($this->scopeSet as $item1) {
                    $res['ScopeSet'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->desktopTypeIdList = [];
                $n1 = 0;
                foreach ($map['DesktopTypeIdList'] as $item1) {
                    $model->desktopTypeIdList[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
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
                $model->scopeSet = [];
                $n1 = 0;
                foreach ($map['ScopeSet'] as $item1) {
                    $model->scopeSet[$n1] = $item1;
                    ++$n1;
                }
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
