<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones\units;

class tenantZones extends Model
{
    /**
     * @var bool
     */
    public $isPrimaryTenantZone;

    /**
     * @var string
     */
    public $logicalZone;

    /**
     * @var string
     */
    public $readOnlyReplicaType;

    /**
     * @var string
     */
    public $replicaType;

    /**
     * @var string
     */
    public $tenantZoneId;

    /**
     * @var string
     */
    public $tenantZoneRole;

    /**
     * @var units[]
     */
    public $units;
    protected $_name = [
        'isPrimaryTenantZone' => 'IsPrimaryTenantZone',
        'logicalZone' => 'LogicalZone',
        'readOnlyReplicaType' => 'ReadOnlyReplicaType',
        'replicaType' => 'ReplicaType',
        'tenantZoneId' => 'TenantZoneId',
        'tenantZoneRole' => 'TenantZoneRole',
        'units' => 'Units',
    ];

    public function validate()
    {
        if (\is_array($this->units)) {
            Model::validateArray($this->units);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->units)) {
                $res['Units'] = [];
                $n1 = 0;
                foreach ($this->units as $item1) {
                    $res['Units'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Units'] as $item1) {
                    $model->units[$n1++] = units::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
