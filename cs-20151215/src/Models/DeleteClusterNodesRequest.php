<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterNodesRequest extends Model
{
    /**
     * @description 是否自动排空节点上的Pod。
     *
     * @var bool
     */
    public $drainNode;

    /**
     * @description 是否同时释放 ECS
     *
     * @var bool
     */
    public $releaseNode;

    /**
     * @description 移除节点列表。
     *
     * @var string[]
     */
    public $nodes;
    protected $_name = [
        'drainNode'   => 'drain_node',
        'releaseNode' => 'release_node',
        'nodes'       => 'nodes',
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
        if (null !== $this->releaseNode) {
            $res['release_node'] = $this->releaseNode;
        }
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
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
        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }

        return $model;
    }
}
