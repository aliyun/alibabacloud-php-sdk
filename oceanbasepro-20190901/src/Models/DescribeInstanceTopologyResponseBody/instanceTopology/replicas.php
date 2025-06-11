<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource;

class replicas extends Model
{
    /**
     * @var string
     */
    public $logicalZone;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var int
     */
    public $onlineNodeNum;

    /**
     * @var string
     */
    public $readOnlyReplicaType;

    /**
     * @var replicaResource
     */
    public $replicaResource;

    /**
     * @var string
     */
    public $replicaType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $zoneLogicalId;

    /**
     * @var string
     */
    public $zoneLogicalName;

    /**
     * @var string
     */
    public $zoneRegionName;
    protected $_name = [
        'logicalZone' => 'LogicalZone',
        'nodeNum' => 'NodeNum',
        'onlineNodeNum' => 'OnlineNodeNum',
        'readOnlyReplicaType' => 'ReadOnlyReplicaType',
        'replicaResource' => 'ReplicaResource',
        'replicaType' => 'ReplicaType',
        'status' => 'Status',
        'zoneLogicalId' => 'ZoneLogicalId',
        'zoneLogicalName' => 'ZoneLogicalName',
        'zoneRegionName' => 'ZoneRegionName',
    ];

    public function validate()
    {
        if (null !== $this->replicaResource) {
            $this->replicaResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicalZone) {
            $res['LogicalZone'] = $this->logicalZone;
        }

        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        if (null !== $this->onlineNodeNum) {
            $res['OnlineNodeNum'] = $this->onlineNodeNum;
        }

        if (null !== $this->readOnlyReplicaType) {
            $res['ReadOnlyReplicaType'] = $this->readOnlyReplicaType;
        }

        if (null !== $this->replicaResource) {
            $res['ReplicaResource'] = null !== $this->replicaResource ? $this->replicaResource->toArray($noStream) : $this->replicaResource;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalZone'])) {
            $model->logicalZone = $map['LogicalZone'];
        }

        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        if (isset($map['OnlineNodeNum'])) {
            $model->onlineNodeNum = $map['OnlineNodeNum'];
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
