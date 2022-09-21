<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveNodePoolNodesShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $drainNode;

    /**
     * @var string
     */
    public $nodesShrink;

    /**
     * @var bool
     */
    public $releaseNode;
    protected $_name = [
        'drainNode'   => 'drain_node',
        'nodesShrink' => 'nodes',
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
        if (isset($map['nodes'])) {
            $model->nodesShrink = $map['nodes'];
        }
        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }

        return $model;
    }
}
