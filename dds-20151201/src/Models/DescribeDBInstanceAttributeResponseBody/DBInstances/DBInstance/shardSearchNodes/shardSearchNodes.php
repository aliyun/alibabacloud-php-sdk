<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\shardSearchNodes;

use AlibabaCloud\Dara\Model;

class shardSearchNodes extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $searchNodeClass;

    /**
     * @var string
     */
    public $searchNodeCount;

    /**
     * @var string
     */
    public $searchNodeId;

    /**
     * @var string
     */
    public $searchNodeStorage;
    protected $_name = [
        'nodeId' => 'NodeId',
        'searchNodeClass' => 'SearchNodeClass',
        'searchNodeCount' => 'SearchNodeCount',
        'searchNodeId' => 'SearchNodeId',
        'searchNodeStorage' => 'SearchNodeStorage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->searchNodeClass) {
            $res['SearchNodeClass'] = $this->searchNodeClass;
        }

        if (null !== $this->searchNodeCount) {
            $res['SearchNodeCount'] = $this->searchNodeCount;
        }

        if (null !== $this->searchNodeId) {
            $res['SearchNodeId'] = $this->searchNodeId;
        }

        if (null !== $this->searchNodeStorage) {
            $res['SearchNodeStorage'] = $this->searchNodeStorage;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['SearchNodeClass'])) {
            $model->searchNodeClass = $map['SearchNodeClass'];
        }

        if (isset($map['SearchNodeCount'])) {
            $model->searchNodeCount = $map['SearchNodeCount'];
        }

        if (isset($map['SearchNodeId'])) {
            $model->searchNodeId = $map['SearchNodeId'];
        }

        if (isset($map['SearchNodeStorage'])) {
            $model->searchNodeStorage = $map['SearchNodeStorage'];
        }

        return $model;
    }
}
