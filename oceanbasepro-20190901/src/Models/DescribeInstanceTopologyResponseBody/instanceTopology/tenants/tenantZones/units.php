<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones;

use AlibabaCloud\Tea\Model;

class units extends Model
{
    /**
     * @description Indicates whether the migration can be canceled.
     * This field is valid only for units that are being manually immigrated or emigrated.
     * @example true
     *
     * @var bool
     */
    public $enableCancelMigrateUnit;

    /**
     * @description The return result of the request.
     *
     * @example true
     *
     * @var bool
     */
    public $enableMigrateUnit;

    /**
     * @description The return result of the request.
     *
     * @example true
     *
     * @var bool
     */
    public $manualMigrate;

    /**
     * @description It is an online CLI tool that allows you to quickly retrieve and debug APIs. It can dynamically generate executable SDK code samples.
     *
     * @example i-bp16niirq4zdmgvm****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Alibaba Cloud CLI
     *
     * @example 2
     *
     * @var float
     */
    public $unitCpu;

    /**
     * @description The operation that you want to perform.
     * Set the value to **DescribeInstanceTopology**.
     * @example 10
     *
     * @var int
     */
    public $unitDataSize;

    /**
     * @description The topology of the cluster.
     *
     * @example 1002
     *
     * @var string
     */
    public $unitId;

    /**
     * @description The ID of the tenant.
     *
     * @example 10
     *
     * @var float
     */
    public $unitMemory;

    /**
     * @description You can call this operation to query the topology of an OceanBase cluster.
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
