<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class RemoveNodePoolNodesRequest extends Model
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
     * @var string[]
     */
    public $instanceIds;
    /**
     * @var string[]
     */
    public $nodes;
    /**
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
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
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

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['instance_ids'] = [];
                $n1                  = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['instance_ids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1           = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['instance_ids'])) {
                $model->instanceIds = [];
                $n1                 = 0;
                foreach ($map['instance_ids'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1           = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }

        return $model;
    }
}
