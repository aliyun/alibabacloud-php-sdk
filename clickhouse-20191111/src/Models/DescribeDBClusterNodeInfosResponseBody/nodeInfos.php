<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNodeInfosResponseBody;

use AlibabaCloud\Dara\Model;

class nodeInfos extends Model
{
    /**
     * @var bool
     */
    public $failoverTesting;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $replicaId;

    /**
     * @var string
     */
    public $shardId;
    protected $_name = [
        'failoverTesting' => 'FailoverTesting',
        'nodeIp' => 'NodeIp',
        'nodeName' => 'NodeName',
        'replicaId' => 'ReplicaId',
        'shardId' => 'ShardId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failoverTesting) {
            $res['FailoverTesting'] = $this->failoverTesting;
        }

        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->replicaId) {
            $res['ReplicaId'] = $this->replicaId;
        }

        if (null !== $this->shardId) {
            $res['ShardId'] = $this->shardId;
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
        if (isset($map['FailoverTesting'])) {
            $model->failoverTesting = $map['FailoverTesting'];
        }

        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['ReplicaId'])) {
            $model->replicaId = $map['ReplicaId'];
        }

        if (isset($map['ShardId'])) {
            $model->shardId = $map['ShardId'];
        }

        return $model;
    }
}
