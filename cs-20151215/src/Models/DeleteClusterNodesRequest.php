<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DeleteClusterNodesRequest extends Model
{
    /**
     * @var bool
     */
    public $drainNode;

    /**
     * @var string[]
     */
    public $nodes;

    /**
     * @var bool
     */
    public $releaseNode;
    protected $_name = [
        'drainNode' => 'drain_node',
        'nodes' => 'nodes',
        'releaseNode' => 'release_node',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drainNode) {
            $res['drain_node'] = $this->drainNode;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['drain_node'])) {
            $model->drainNode = $map['drain_node'];
        }

        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['release_node'])) {
            $model->releaseNode = $map['release_node'];
        }

        return $model;
    }
}
