<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes\nodeResource;

class nodes extends Model
{
    /**
     * @var int
     */
    public $fullCopyId;

    /**
     * @var string
     */
    public $logicalZone;

    /**
     * @var int
     */
    public $nodeCopyId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var nodeResource
     */
    public $nodeResource;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
     * @var int
     */
    public $readOnlyCopyId;

    /**
     * @var string
     */
    public $readOnlyReplicaType;

    /**
     * @var string
     */
    public $replicaType;
    protected $_name = [
        'fullCopyId' => 'FullCopyId',
        'logicalZone' => 'LogicalZone',
        'nodeCopyId' => 'NodeCopyId',
        'nodeId' => 'NodeId',
        'nodeResource' => 'NodeResource',
        'nodeStatus' => 'NodeStatus',
        'readOnlyCopyId' => 'ReadOnlyCopyId',
        'readOnlyReplicaType' => 'ReadOnlyReplicaType',
        'replicaType' => 'ReplicaType',
    ];

    public function validate()
    {
        if (null !== $this->nodeResource) {
            $this->nodeResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['NodeResource'] = null !== $this->nodeResource ? $this->nodeResource->toArray($noStream) : $this->nodeResource;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
