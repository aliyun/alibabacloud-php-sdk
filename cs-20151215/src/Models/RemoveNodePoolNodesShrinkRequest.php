<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class RemoveNodePoolNodesShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $concurrency;
    /**
     * @var bool
     */
    public $drainNode;
    /**
     * @var string
     */
    public $instanceIdsShrink;
    /**
     * @var string
     */
    public $nodesShrink;
    /**
     * @var bool
     */
    public $releaseNode;
    protected $_name = [
        'concurrency'       => 'concurrency',
        'drainNode'         => 'drain_node',
        'instanceIdsShrink' => 'instance_ids',
        'nodesShrink'       => 'nodes',
        'releaseNode'       => 'release_node',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['concurrency'] = $this->concurrency;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
