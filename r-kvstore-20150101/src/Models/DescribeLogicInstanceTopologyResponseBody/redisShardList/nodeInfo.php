<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisShardList;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @example 96
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @example 2048
     *
     * @var string
     */
    public $capacity;

    /**
     * @example 10000
     *
     * @var string
     */
    public $connection;

    /**
     * @example r-bp10noxlhcoim2****-db-0#688****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example db
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $subInstanceType;
    protected $_name = [
        'bandwidth'       => 'Bandwidth',
        'capacity'        => 'Capacity',
        'connection'      => 'Connection',
        'nodeId'          => 'NodeId',
        'nodeType'        => 'NodeType',
        'subInstanceType' => 'SubInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
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
