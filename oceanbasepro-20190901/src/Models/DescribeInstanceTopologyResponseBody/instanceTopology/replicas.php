<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource;
use AlibabaCloud\Tea\Model;

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
        'logicalZone'     => 'LogicalZone',
        'nodeNum'         => 'NodeNum',
        'replicaResource' => 'ReplicaResource',
        'replicaType'     => 'ReplicaType',
        'status'          => 'Status',
        'zoneLogicalId'   => 'ZoneLogicalId',
        'zoneLogicalName' => 'ZoneLogicalName',
        'zoneRegionName'  => 'ZoneRegionName',
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
