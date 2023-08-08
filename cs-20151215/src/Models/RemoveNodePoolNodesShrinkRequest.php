<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveNodePoolNodesShrinkRequest extends Model
{
    /**
     * @description true
     *
     * @example true
     *
     * @var bool
     */
    public $drainNode;

    /**
     * @description i-bp1c70fqbv1nlu9xxxxx
     *
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description cn-hangzhou.172.16.xxx.xxx
     *
     * @var string
     */
    public $nodesShrink;

    /**
     * @description true
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
