<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork;

use AlibabaCloud\Tea\Model;

class edge extends Model
{
    /**
     * @description The ID of the destination node.
     *
     * @example cfb41a869c71e4678a97021582dd8****
     *
     * @var string
     */
    public $dstNodeId;

    /**
     * @description The type of the destination node. Valid values:
     *
     *   Set the value to **cluster**.
     *
     * @example cluster
     *
     * @var string
     */
    public $dstNodeType;

    /**
     * @description The ID of the topology edge.
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description The port number of the topology edge.
     *
     * @example 6164
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the source node.
     *
     * @example cfb41a869c71e4678a97021582dd8****
     *
     * @var string
     */
    public $srcNodeId;

    /**
     * @description The type of the source node. Valid values:
     *
     *   **cluster**: a cluster.
     *   **internet**: a network node outside the cluster
     *
     * @example cluster
     *
     * @var string
     */
    public $srcNodeType;
    protected $_name = [
        'dstNodeId'   => 'DstNodeId',
        'dstNodeType' => 'DstNodeType',
        'id'          => 'Id',
        'port'        => 'Port',
        'srcNodeId'   => 'SrcNodeId',
        'srcNodeType' => 'SrcNodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstNodeId) {
            $res['DstNodeId'] = $this->dstNodeId;
        }
        if (null !== $this->dstNodeType) {
            $res['DstNodeType'] = $this->dstNodeType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->srcNodeId) {
            $res['SrcNodeId'] = $this->srcNodeId;
        }
        if (null !== $this->srcNodeType) {
            $res['SrcNodeType'] = $this->srcNodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstNodeId'])) {
            $model->dstNodeId = $map['DstNodeId'];
        }
        if (isset($map['DstNodeType'])) {
            $model->dstNodeType = $map['DstNodeType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SrcNodeId'])) {
            $model->srcNodeId = $map['SrcNodeId'];
        }
        if (isset($map['SrcNodeType'])) {
            $model->srcNodeType = $map['SrcNodeType'];
        }

        return $model;
    }
}
