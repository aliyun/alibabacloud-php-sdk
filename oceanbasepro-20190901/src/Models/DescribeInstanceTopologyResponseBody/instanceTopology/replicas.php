<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource;
use AlibabaCloud\Tea\Model;

class replicas extends Model
{
    /**
     * @description The ID of the replica.
     *
     * @example cn-hangzhou-h-z0
     *
     * @var string
     */
    public $logicalZone;

    /**
     * @description The number of nodes of the replica.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The type of the read-only replica.
     *
     * @example ROW_STORE
     *
     * @var string
     */
    public $readOnlyReplicaType;

    /**
     * @description The information about the replica resources.
     *
     * @var replicaResource
     */
    public $replicaResource;

    /**
     * @description The type of the replica.
     *
     * @example FULL
     *
     * @var string
     */
    public $replicaType;

    /**
     * @description The status of the replica. Valid values: ACTIVE, INACTIVE, and UNKNOWN.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The serial number of the replica.
     *
     * @example 1
     *
     * @var int
     */
    public $zoneLogicalId;

    /**
     * @description The region of the replica.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneLogicalName;

    /**
     * @description The zone of the replica.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneRegionName;
    protected $_name = [
        'logicalZone'         => 'LogicalZone',
        'nodeNum'             => 'NodeNum',
        'readOnlyReplicaType' => 'ReadOnlyReplicaType',
        'replicaResource'     => 'ReplicaResource',
        'replicaType'         => 'ReplicaType',
        'status'              => 'Status',
        'zoneLogicalId'       => 'ZoneLogicalId',
        'zoneLogicalName'     => 'ZoneLogicalName',
        'zoneRegionName'      => 'ZoneRegionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalZone) {
            $res['LogicalZone'] = $this->logicalZone;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->readOnlyReplicaType) {
            $res['ReadOnlyReplicaType'] = $this->readOnlyReplicaType;
        }
        if (null !== $this->replicaResource) {
            $res['ReplicaResource'] = null !== $this->replicaResource ? $this->replicaResource->toMap() : null;
        }
        if (null !== $this->replicaType) {
            $res['ReplicaType'] = $this->replicaType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneLogicalId) {
            $res['ZoneLogicalId'] = $this->zoneLogicalId;
        }
        if (null !== $this->zoneLogicalName) {
            $res['ZoneLogicalName'] = $this->zoneLogicalName;
        }
        if (null !== $this->zoneRegionName) {
            $res['ZoneRegionName'] = $this->zoneRegionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalZone'])) {
            $model->logicalZone = $map['LogicalZone'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['ReadOnlyReplicaType'])) {
            $model->readOnlyReplicaType = $map['ReadOnlyReplicaType'];
        }
        if (isset($map['ReplicaResource'])) {
            $model->replicaResource = replicaResource::fromMap($map['ReplicaResource']);
        }
        if (isset($map['ReplicaType'])) {
            $model->replicaType = $map['ReplicaType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneLogicalId'])) {
            $model->zoneLogicalId = $map['ZoneLogicalId'];
        }
        if (isset($map['ZoneLogicalName'])) {
            $model->zoneLogicalName = $map['ZoneLogicalName'];
        }
        if (isset($map['ZoneRegionName'])) {
            $model->zoneRegionName = $map['ZoneRegionName'];
        }

        return $model;
    }
}
