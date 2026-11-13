<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph\edges;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph\nodes;

class graph extends Model
{
    /**
     * @var edges[]
     */
    public $edges;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $rootNodeId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'edges' => 'Edges',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'nodes' => 'Nodes',
        'rootNodeId' => 'RootNodeId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->edges)) {
            Model::validateArray($this->edges);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edges) {
            if (\is_array($this->edges)) {
                $res['Edges'] = [];
                $n1 = 0;
                foreach ($this->edges as $item1) {
                    $res['Edges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rootNodeId) {
            $res['RootNodeId'] = $this->rootNodeId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Edges'])) {
            if (!empty($map['Edges'])) {
                $model->edges = [];
                $n1 = 0;
                foreach ($map['Edges'] as $item1) {
                    $model->edges[$n1] = edges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1] = nodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RootNodeId'])) {
            $model->rootNodeId = $map['RootNodeId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
