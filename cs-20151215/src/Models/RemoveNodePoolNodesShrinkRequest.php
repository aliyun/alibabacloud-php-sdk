<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveNodePoolNodesShrinkRequest extends Model
{
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
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description A list of nodes that you want to remove.
     *
     * @var string
     */
    public $nodesShrink;

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
        'drainNode'         => 'drain_node',
        'instanceIdsShrink' => 'instance_ids',
        'nodesShrink'       => 'nodes',
        'releaseNode'       => 'release_node',
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
        if (null !== $this->instanceIdsShrink) {
            $res['instance_ids'] = $this->instanceIdsShrink;
        }
        if (null !== $this->nodesShrink) {
            $res['nodes'] = $this->nodesShrink;
        }
        if (null !== $this->releaseNode) {
            $res['release_node'] = $this->releaseNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveNodePoolNodesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drain_node'])) {
            $model->drainNode = $map['drain_node'];
        }
        if (isset($map['instance_ids'])) {
            $model->instanceIdsShrink = $map['instance_ids'];
        }
        if (isset($map['nodes'])) {
            $model->nodesShrink = $map['nodes'];
        }
        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }

        return $model;
    }
}
