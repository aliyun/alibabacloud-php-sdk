<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones;

use AlibabaCloud\Tea\Model;

class units extends Model
{
    /**
     * @description Indicates whether the migration can be canceled. This parameter is valid only for resource units that are being manually immigrated or emigrated.
     *
     * @example true
     *
     * @var bool
     */
    public $enableCancelMigrateUnit;

    /**
     * @description Indicates whether the resource unit can be migrated.
     *
     * @example true
     *
     * @var bool
     */
    public $enableMigrateUnit;

    /**
     * @description Indicates whether the resource unit is manually migrated.
     *
     * @example true
     *
     * @var bool
     */
    public $manualMigrate;

    /**
     * @description The ID of the OBServer node in which the resource unit resides.
     *
     * @example i-bp16niirq4zdmgvm****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The type of the replica. Node filtering conditions are configured based on the replica type when you query the monitoring data of the OceanBase cluster.
     * By default, the replica type is not specified when you query the monitoring data of OceanBase clusters or the access proxy. If you do not specify the replica type when you query the monitoring data of an OceanBase cluster, the monitoring data of all nodes is queried.
     * If you set the replica type to FULL when you query the monitoring data of an OceanBase cluster, the monitoring data of only the full-featured replica nodes is queried.
     * If you set the replica type to READONLY when you query the monitoring data of an OceanBase cluster, the monitoring data of only the read-only replica nodes is queried.
     *
     * @example FULL
     *
     * @var string
     */
    public $replicaType;

    /**
     * @description The number of CPU cores of the resource unit.
     *
     * @example 2
     *
     * @var float
     */
    public $unitCpu;

    /**
     * @description The data size of the resource unit.
     *
     * @example 10
     *
     * @var int
     */
    public $unitDataSize;

    /**
     * @description The ID of the resource unit.
     *
     * @example 1002
     *
     * @var string
     */
    public $unitId;

    /**
     * @description The memory size of the resource unit, in GB.
     *
     * @example 10
     *
     * @var float
     */
    public $unitMemory;

    /**
     * @description The status of the resource unit. Valid values:
     * ONLINE: The resource unit is running.
     * IMMIGRATING: The resource unit is being immigrated.
     * EMIGRATING: The resource unit is being emigrated.
     * CANCEL_EMIGRATING: The immigration of the resource unit is being canceled.
     * CANCEL_EMIGRATING: The emigration of the resource unit is being canceled.
     * DELETING: The resource unit is being deleted.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $unitStatus;
    protected $_name = [
        'enableCancelMigrateUnit' => 'EnableCancelMigrateUnit',
        'enableMigrateUnit'       => 'EnableMigrateUnit',
        'manualMigrate'           => 'ManualMigrate',
        'nodeId'                  => 'NodeId',
        'replicaType'             => 'ReplicaType',
        'unitCpu'                 => 'UnitCpu',
        'unitDataSize'            => 'UnitDataSize',
        'unitId'                  => 'UnitId',
        'unitMemory'              => 'UnitMemory',
        'unitStatus'              => 'UnitStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableCancelMigrateUnit) {
            $res['EnableCancelMigrateUnit'] = $this->enableCancelMigrateUnit;
        }
        if (null !== $this->enableMigrateUnit) {
            $res['EnableMigrateUnit'] = $this->enableMigrateUnit;
        }
        if (null !== $this->manualMigrate) {
            $res['ManualMigrate'] = $this->manualMigrate;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->replicaType) {
            $res['ReplicaType'] = $this->replicaType;
        }
        if (null !== $this->unitCpu) {
            $res['UnitCpu'] = $this->unitCpu;
        }
        if (null !== $this->unitDataSize) {
            $res['UnitDataSize'] = $this->unitDataSize;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }
        if (null !== $this->unitMemory) {
            $res['UnitMemory'] = $this->unitMemory;
        }
        if (null !== $this->unitStatus) {
            $res['UnitStatus'] = $this->unitStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return units
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableCancelMigrateUnit'])) {
            $model->enableCancelMigrateUnit = $map['EnableCancelMigrateUnit'];
        }
        if (isset($map['EnableMigrateUnit'])) {
            $model->enableMigrateUnit = $map['EnableMigrateUnit'];
        }
        if (isset($map['ManualMigrate'])) {
            $model->manualMigrate = $map['ManualMigrate'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ReplicaType'])) {
            $model->replicaType = $map['ReplicaType'];
        }
        if (isset($map['UnitCpu'])) {
            $model->unitCpu = $map['UnitCpu'];
        }
        if (isset($map['UnitDataSize'])) {
            $model->unitDataSize = $map['UnitDataSize'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['UnitMemory'])) {
            $model->unitMemory = $map['UnitMemory'];
        }
        if (isset($map['UnitStatus'])) {
            $model->unitStatus = $map['UnitStatus'];
        }

        return $model;
    }
}
