<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones\units;
use AlibabaCloud\Tea\Model;

class tenantZones extends Model
{
    /**
     * @description Indicates whether the zone is the primary zone.
     *
     * @example true
     *
     * @var bool
     */
    public $isPrimaryTenantZone;

    /**
     * @description The ID of the replica.
     *
     * @example cn-hangzhou-h-z0
     *
     * @var string
     */
    public $logicalZone;

    /**
     * @description The type of the read-only replica.
     *
     * @example ROW_STORE
     *
     * @var string
     */
    public $readOnlyReplicaType;

    /**
     * @description The replica type of the tenant.
     *
     * @example FULL
     *
     * @var string
     */
    public $replicaType;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $tenantZoneId;

    /**
     * @description The role to access the zone. Valid values:
     * ReadWrite: a role that has the read and write privileges.
     * ReadOnly: a role that has only the read-only privilege.
     *
     * @example ReadWrite
     *
     * @var string
     */
    public $tenantZoneRole;

    /**
     * @description The information about the resource units.
     *
     * @var units[]
     */
    public $units;
    protected $_name = [
        'isPrimaryTenantZone' => 'IsPrimaryTenantZone',
        'logicalZone'         => 'LogicalZone',
        'readOnlyReplicaType' => 'ReadOnlyReplicaType',
        'replicaType'         => 'ReplicaType',
        'tenantZoneId'        => 'TenantZoneId',
        'tenantZoneRole'      => 'TenantZoneRole',
        'units'               => 'Units',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPrimaryTenantZone) {
            $res['IsPrimaryTenantZone'] = $this->isPrimaryTenantZone;
        }
        if (null !== $this->logicalZone) {
            $res['LogicalZone'] = $this->logicalZone;
        }
        if (null !== $this->readOnlyReplicaType) {
            $res['ReadOnlyReplicaType'] = $this->readOnlyReplicaType;
        }
        if (null !== $this->replicaType) {
            $res['ReplicaType'] = $this->replicaType;
        }
        if (null !== $this->tenantZoneId) {
            $res['TenantZoneId'] = $this->tenantZoneId;
        }
        if (null !== $this->tenantZoneRole) {
            $res['TenantZoneRole'] = $this->tenantZoneRole;
        }
        if (null !== $this->units) {
            $res['Units'] = [];
            if (null !== $this->units && \is_array($this->units)) {
                $n = 0;
                foreach ($this->units as $item) {
                    $res['Units'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPrimaryTenantZone'])) {
            $model->isPrimaryTenantZone = $map['IsPrimaryTenantZone'];
        }
        if (isset($map['LogicalZone'])) {
            $model->logicalZone = $map['LogicalZone'];
        }
        if (isset($map['ReadOnlyReplicaType'])) {
            $model->readOnlyReplicaType = $map['ReadOnlyReplicaType'];
        }
        if (isset($map['ReplicaType'])) {
            $model->replicaType = $map['ReplicaType'];
        }
        if (isset($map['TenantZoneId'])) {
            $model->tenantZoneId = $map['TenantZoneId'];
        }
        if (isset($map['TenantZoneRole'])) {
            $model->tenantZoneRole = $map['TenantZoneRole'];
        }
        if (isset($map['Units'])) {
            if (!empty($map['Units'])) {
                $model->units = [];
                $n            = 0;
                foreach ($map['Units'] as $item) {
                    $model->units[$n++] = null !== $item ? units::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
