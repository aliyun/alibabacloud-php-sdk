<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\shardList;

use AlibabaCloud\Tea\Model;

class shardAttribute extends Model
{
    /**
     * @description The maximum number of connections to the shard node.
     *
     * @example d-bp1af0680a9c6d3****.mongodb.rds.aliyuncs.com:****
     *
     * @var string
     */
    public $connectString;

    /**
     * @description The name of the shard node.
     *
     * @example 8000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The instance type of the shard node.
     *
     * @example 8000
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description The port number that is used to connect to the shard node.
     *
     * @example dds.shard.mid
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @description The storage capacity of the shard node.
     *
     * @example testshard
     *
     * @var string
     */
    public $nodeDescription;

    /**
     * @description The number of read-only nodes in the shard node. Valid values: **0** to **5**. The value must be an integer.
     *
     * @example d-bp16e09d9c5d****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The state of the shard node. For more information, see [Instance states](~~63870~~).
     *
     * @example 10
     *
     * @var int
     */
    public $nodeStorage;

    /**
     * @description The ID of the shard node.
     *
     * @example 3717
     *
     * @var int
     */
    public $port;

    /**
     * @description The end time of the maintenance window. The time is in the *HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 0
     *
     * @var int
     */
    public $readonlyReplicas;

    /**
     * @description The state of the instance. For more information, see [Instance states](~~63870~~).
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'connectString'    => 'ConnectString',
        'maxConnections'   => 'MaxConnections',
        'maxIOPS'          => 'MaxIOPS',
        'nodeClass'        => 'NodeClass',
        'nodeDescription'  => 'NodeDescription',
        'nodeId'           => 'NodeId',
        'nodeStorage'      => 'NodeStorage',
        'port'             => 'Port',
        'readonlyReplicas' => 'ReadonlyReplicas',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectString) {
            $res['ConnectString'] = $this->connectString;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ConnectString'])) {
            $model->connectString = $map['ConnectString'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
