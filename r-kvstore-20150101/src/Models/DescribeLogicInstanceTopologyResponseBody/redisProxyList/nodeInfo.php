<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisProxyList;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description The maximum bandwidth of the node. Unit: Mbit/s.
     *
     * @example 96
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The storage capacity of the node. Unit: MB.
     *
     * @example 5120
     *
     * @var string
     */
    public $capacity;

    /**
     * @description The maximum number of connections.
     *
     * @example 320000
     *
     * @var string
     */
    public $connection;

    /**
     * @description The ID of the node.
     *
     * @example r-bp10noxlhcoim2****-proxy-3#542****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The node type. Valid values:
     *
     *   **db**: a data node.
     *   **normal**: a management node, which can be a proxy node or a Configserver node. For specific instances, the return value of this parameter is proxy or cs, instead of normal.
     *
     * @example proxy
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'bandwidth'  => 'Bandwidth',
        'capacity'   => 'Capacity',
        'connection' => 'Connection',
        'nodeId'     => 'NodeId',
        'nodeType'   => 'NodeType',
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

        return $model;
    }
}
