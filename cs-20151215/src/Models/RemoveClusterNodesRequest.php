<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveClusterNodesRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 是否同时释放ECS。
     *
     * @var bool
     */
    public $releaseNode;

    /**
     * @description 是否排空节点上的Pod。
     *
     * @var bool
     */
    public $drainNode;

    /**
     * @description 要移除的Node列表。
     *
     * @var string[]
     */
    public $nodes;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'releaseNode' => 'release_node',
        'drainNode'   => 'drain_node',
        'nodes'       => 'nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->releaseNode) {
            $res['release_node'] = $this->releaseNode;
        }
        if (null !== $this->drainNode) {
            $res['drain_node'] = $this->drainNode;
        }
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }
        if (isset($map['drain_node'])) {
            $model->drainNode = $map['drain_node'];
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }

        return $model;
    }
}
