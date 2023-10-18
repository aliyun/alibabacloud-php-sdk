<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveClusterNodesRequest extends Model
{
    /**
     * @description Specifies whether to evict all pods from the nodes that you want to remove.
     *
     * @var bool
     */
    public $drainNode;

    /**
     * @description The list of nodes to be removed.
     *
     * @var string[]
     */
    public $nodes;

    /**
     * @description Specifies whether to release the Elastic Compute Service (ECS) instances when they are removed from the cluster.
     *
     * @var bool
     */
    public $releaseNode;
    protected $_name = [
        'drainNode'   => 'drain_node',
        'nodes'       => 'nodes',
        'releaseNode' => 'release_node',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drainNode) {
            $res['drain_node'] = $this->drainNode;
        }
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
        }
        if (null !== $this->releaseNode) {
            $res['release_node'] = $this->releaseNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveClusterNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drain_node'])) {
            $model->drainNode = $map['drain_node'];
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }
        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }

        return $model;
    }
}
