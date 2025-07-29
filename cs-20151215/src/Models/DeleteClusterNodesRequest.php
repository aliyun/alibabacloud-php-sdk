<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterNodesRequest extends Model
{
    /**
     * @description Specifies whether to remove all pods from the nodes you want to remove. Valid values:
     *
     *   `true`: removes all pods automatically.
     *   `false`: skips removing pods.
     *
     * Default value: `false`
     *
     * @example true
     *
     * @var bool
     */
    public $drainNode;

    /**
     * @description The list of nodes to remove. You must specify the node names used in the cluster, for example, `cn-hangzhou.192.168.xx.xx`.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $nodes;

    /**
     * @description Specifies whether to release the ECS instances. Valid values:
     *
     *   `true`: releases the ECS instances.
     *   `false`: retains the ECS instances.
     *
     * Default value: `false`
     **Notes** Unsupported for subscription ECS instances.
     * @example true
     *
     * @var bool
     */
    public $releaseNode;
    protected $_name = [
        'drainNode' => 'drain_node',
        'nodes' => 'nodes',
        'releaseNode' => 'release_node',
    ];

    public function validate() {}

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
     * @return DeleteClusterNodesRequest
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
