<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones;
use AlibabaCloud\Tea\Model;

class tenants extends Model
{
    /**
     * @description The server with the highest disk usage.
     *
     * @example RANDOM
     *
     * @var string
     */
    public $primaryZoneDeployType;

    /**
     * @description The information about the memory resources of the node.
     *
     * @example 2
     *
     * @var float
     */
    public $tenantCpu;

    /**
     * @description The name of the tenant.
     *
     * @example multiple
     *
     * @var string
     */
    public $tenantDeployType;

    /**
     * @var float
     */
    public $tenantDiskSize;

    /**
     * @description The size of used memory of the node, in GB.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The total storage space of the node, in GB.
     *
     * @example 10
     *
     * @var float
     */
    public $tenantMemory;

    /**
     * @description The size of used storage space of the node, in GB.
     *
     * @example Oracle
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @description The total memory size of the node, in GB.
     *
     * @example pay_online
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The size of used memory of the node, in GB.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $tenantStatus;

    /**
     * @var float
     */
    public $tenantUnitCpu;

    /**
     * @var float
     */
    public $tenantUnitMemory;

    /**
     * @description The number of CPU cores of the tenant.
     *
     * @example 1
     *
     * @var int
     */
    public $tenantUnitNum;

    /**
     * @description The information about the storage resources of the node.
     *
     * @var tenantZones[]
     */
    public $tenantZones;
    protected $_name = [
        'primaryZoneDeployType' => 'PrimaryZoneDeployType',
        'tenantCpu'             => 'TenantCpu',
        'tenantDeployType'      => 'TenantDeployType',
        'tenantDiskSize'        => 'TenantDiskSize',
        'tenantId'              => 'TenantId',
        'tenantMemory'          => 'TenantMemory',
        'tenantMode'            => 'TenantMode',
        'tenantName'            => 'TenantName',
        'tenantStatus'          => 'TenantStatus',
        'tenantUnitCpu'         => 'TenantUnitCpu',
        'tenantUnitMemory'      => 'TenantUnitMemory',
        'tenantUnitNum'         => 'TenantUnitNum',
        'tenantZones'           => 'TenantZones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primaryZoneDeployType) {
            $res['PrimaryZoneDeployType'] = $this->primaryZoneDeployType;
        }
        if (null !== $this->tenantCpu) {
            $res['TenantCpu'] = $this->tenantCpu;
        }
        if (null !== $this->tenantDeployType) {
            $res['TenantDeployType'] = $this->tenantDeployType;
        }
        if (null !== $this->tenantDiskSize) {
            $res['TenantDiskSize'] = $this->tenantDiskSize;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantMemory) {
            $res['TenantMemory'] = $this->tenantMemory;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->tenantStatus) {
            $res['TenantStatus'] = $this->tenantStatus;
        }
        if (null !== $this->tenantUnitCpu) {
            $res['TenantUnitCpu'] = $this->tenantUnitCpu;
        }
        if (null !== $this->tenantUnitMemory) {
            $res['TenantUnitMemory'] = $this->tenantUnitMemory;
        }
        if (null !== $this->tenantUnitNum) {
            $res['TenantUnitNum'] = $this->tenantUnitNum;
        }
        if (null !== $this->tenantZones) {
            $res['TenantZones'] = [];
            if (null !== $this->tenantZones && \is_array($this->tenantZones)) {
                $n = 0;
                foreach ($this->tenantZones as $item) {
                    $res['TenantZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenants
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimaryZoneDeployType'])) {
            $model->primaryZoneDeployType = $map['PrimaryZoneDeployType'];
        }
        if (isset($map['TenantCpu'])) {
            $model->tenantCpu = $map['TenantCpu'];
        }
        if (isset($map['TenantDeployType'])) {
            $model->tenantDeployType = $map['TenantDeployType'];
        }
        if (isset($map['TenantDiskSize'])) {
            $model->tenantDiskSize = $map['TenantDiskSize'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantMemory'])) {
            $model->tenantMemory = $map['TenantMemory'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TenantStatus'])) {
            $model->tenantStatus = $map['TenantStatus'];
        }
        if (isset($map['TenantUnitCpu'])) {
            $model->tenantUnitCpu = $map['TenantUnitCpu'];
        }
        if (isset($map['TenantUnitMemory'])) {
            $model->tenantUnitMemory = $map['TenantUnitMemory'];
        }
        if (isset($map['TenantUnitNum'])) {
            $model->tenantUnitNum = $map['TenantUnitNum'];
        }
        if (isset($map['TenantZones'])) {
            if (!empty($map['TenantZones'])) {
                $model->tenantZones = [];
                $n                  = 0;
                foreach ($map['TenantZones'] as $item) {
                    $model->tenantZones[$n++] = null !== $item ? tenantZones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
