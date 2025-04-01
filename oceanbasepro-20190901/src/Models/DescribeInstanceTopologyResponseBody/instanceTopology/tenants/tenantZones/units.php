<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones;

use AlibabaCloud\Dara\Model;

class units extends Model
{
    /**
     * @var bool
     */
    public $enableCancelMigrateUnit;

    /**
     * @var bool
     */
    public $enableMigrateUnit;

    /**
     * @var bool
     */
    public $manualMigrate;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $replicaType;

    /**
     * @var float
     */
    public $unitCpu;

    /**
     * @var int
     */
    public $unitDataSize;

    /**
     * @var string
     */
    public $unitId;

    /**
     * @var float
     */
    public $unitMemory;

    /**
     * @var string
     */
    public $unitStatus;
    protected $_name = [
        'enableCancelMigrateUnit' => 'EnableCancelMigrateUnit',
        'enableMigrateUnit' => 'EnableMigrateUnit',
        'manualMigrate' => 'ManualMigrate',
        'nodeId' => 'NodeId',
        'replicaType' => 'ReplicaType',
        'unitCpu' => 'UnitCpu',
        'unitDataSize' => 'UnitDataSize',
        'unitId' => 'UnitId',
        'unitMemory' => 'UnitMemory',
        'unitStatus' => 'UnitStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
