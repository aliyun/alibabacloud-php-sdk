<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveNodePoolNodesRequest extends Model
{
    /**
     * @description 是否并发移除。
     *
     * @example false
     *
     * @var bool
     */
    public $concurrency;

    /**
     * @description Specifies whether to drain the nodes that you want to remove. Valid values:
     *
     *   true: drain the nodes that you want to remove.
     *   false: do not drain the nodes that you want to remove.
     *
     * @example true
     *
     * @var bool
     */
    public $drainNode;

    /**
     * @description A list of instances that you want to remove.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description A list of nodes that you want to remove.
     *
     * @var string[]
     */
    public $nodes;

    /**
     * @description Specifies whether to release the nodes after they are removed. Valid values:
     *
     *   true: release the nodes after they are removed.
     *   false: do not release the nodes after they are removed.
     *
     * @example true
     *
     * @var bool
     */
    public $releaseNode;
    protected $_name = [
        'concurrency' => 'concurrency',
        'drainNode'   => 'drain_node',
        'instanceIds' => 'instance_ids',
        'nodes'       => 'nodes',
        'releaseNode' => 'release_node',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['concurrency'] = $this->concurrency;
        }
        if (null !== $this->drainNode) {
            $res['drain_node'] = $this->drainNode;
        }
        if (null !== $this->instanceIds) {
            $res['instance_ids'] = $this->instanceIds;
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
     * @return RemoveNodePoolNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['concurrency'])) {
            $model->concurrency = $map['concurrency'];
        }
        if (isset($map['drain_node'])) {
            $model->drainNode = $map['drain_node'];
        }
        if (isset($map['instance_ids'])) {
            if (!empty($map['instance_ids'])) {
                $model->instanceIds = $map['instance_ids'];
            }
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
