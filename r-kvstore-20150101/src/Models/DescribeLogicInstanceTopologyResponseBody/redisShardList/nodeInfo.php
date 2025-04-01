<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisShardList;

use AlibabaCloud\Dara\Model;

class nodeInfo extends Model
{
    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $connection;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $subInstanceType;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'capacity' => 'Capacity',
        'connection' => 'Connection',
        'nodeId' => 'NodeId',
        'nodeType' => 'NodeType',
        'subInstanceType' => 'SubInstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->subInstanceType) {
            $res['SubInstanceType'] = $this->subInstanceType;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['SubInstanceType'])) {
            $model->subInstanceType = $map['SubInstanceType'];
        }

        return $model;
    }
}
