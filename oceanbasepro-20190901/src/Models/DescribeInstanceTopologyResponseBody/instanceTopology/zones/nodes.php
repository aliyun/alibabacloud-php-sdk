<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes\nodeResource;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The ID of the full-featured replica.
     *
     * @example 1
     *
     * @var int
     */
    public $fullCopyId;

    /**
     * @description The ID of the replica.
     *
     * @example cn-hangzhou-h-z0
     *
     * @var string
     */
    public $logicalZone;

    /**
     * @description The ID of the replica node.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeCopyId;

    /**
     * @description The ID of the node.
     *
     * @example i-bp16niirq4zdmgvm****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The information about node resources.
     *
     * @var nodeResource
     */
    public $nodeResource;

    /**
     * @description The status of the node.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $nodeStatus;

    /**
     * @description The ID of the read-only replica.
     *
     * @example 1
     *
     * @var int
     */
    public $readOnlyCopyId;

    /**
     * @description The type of the read-only replica.
     *
     * @example ROW_STORE
     *
     * @var string
     */
    public $readOnlyReplicaType;

    /**
     * @description The type of the replica. Valid values:
     * FULL.
     * READONLY.
     *
     * @example FULL
     *
     * @var string
     */
    public $replicaType;
    protected $_name = [
        'fullCopyId'          => 'FullCopyId',
        'logicalZone'         => 'LogicalZone',
        'nodeCopyId'          => 'NodeCopyId',
        'nodeId'              => 'NodeId',
        'nodeResource'        => 'NodeResource',
        'nodeStatus'          => 'NodeStatus',
        'readOnlyCopyId'      => 'ReadOnlyCopyId',
        'readOnlyReplicaType' => 'ReadOnlyReplicaType',
        'replicaType'         => 'ReplicaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullCopyId) {
            $res['FullCopyId'] = $this->fullCopyId;
        }
        if (null !== $this->logicalZone) {
            $res['LogicalZone'] = $this->logicalZone;
        }
        if (null !== $this->nodeCopyId) {
            $res['NodeCopyId'] = $this->nodeCopyId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeResource) {
            $res['NodeResource'] = null !== $this->nodeResource ? $this->nodeResource->toMap() : null;
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }
        if (null !== $this->readOnlyCopyId) {
            $res['ReadOnlyCopyId'] = $this->readOnlyCopyId;
        }
        if (null !== $this->readOnlyReplicaType) {
            $res['ReadOnlyReplicaType'] = $this->readOnlyReplicaType;
        }
        if (null !== $this->replicaType) {
            $res['ReplicaType'] = $this->replicaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullCopyId'])) {
            $model->fullCopyId = $map['FullCopyId'];
        }
        if (isset($map['LogicalZone'])) {
            $model->logicalZone = $map['LogicalZone'];
        }
        if (isset($map['NodeCopyId'])) {
            $model->nodeCopyId = $map['NodeCopyId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeResource'])) {
            $model->nodeResource = nodeResource::fromMap($map['NodeResource']);
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }
        if (isset($map['ReadOnlyCopyId'])) {
            $model->readOnlyCopyId = $map['ReadOnlyCopyId'];
        }
        if (isset($map['ReadOnlyReplicaType'])) {
            $model->readOnlyReplicaType = $map['ReadOnlyReplicaType'];
        }
        if (isset($map['ReplicaType'])) {
            $model->replicaType = $map['ReplicaType'];
        }

        return $model;
    }
}
