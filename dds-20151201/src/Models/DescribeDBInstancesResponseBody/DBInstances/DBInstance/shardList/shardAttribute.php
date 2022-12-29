<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\shardList;

use AlibabaCloud\Tea\Model;

class shardAttribute extends Model
{
    /**
     * @description The type of the shard node.
     *
     * @example dds.shard.mid
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @description The description of the shard node.
     *
     * @example testshard
     *
     * @var string
     */
    public $nodeDescription;

    /**
     * @description The ID of the shard node.
     *
     * @example d-bp1cac6f2083****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The storage capacity of the shard node. Unit: GB.
     *
     * @example 10
     *
     * @var int
     */
    public $nodeStorage;

    /**
     * @description The number of read-only nodes in the shard node. Valid values: **0** to **5**.
     *
     * @example 2
     *
     * @var int
     */
    public $readonlyReplicas;
    protected $_name = [
        'nodeClass'        => 'NodeClass',
        'nodeDescription'  => 'NodeDescription',
        'nodeId'           => 'NodeId',
        'nodeStorage'      => 'NodeStorage',
        'readonlyReplicas' => 'ReadonlyReplicas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->nodeDescription) {
            $res['NodeDescription'] = $this->nodeDescription;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeStorage) {
            $res['NodeStorage'] = $this->nodeStorage;
        }
        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shardAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeStorage'])) {
            $model->nodeStorage = $map['NodeStorage'];
        }
        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }

        return $model;
    }
}
