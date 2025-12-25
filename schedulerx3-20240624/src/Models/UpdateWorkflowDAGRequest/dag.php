<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGRequest\dag\edges;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGRequest\dag\nodes;

class dag extends Model
{
    /**
     * @var edges[]
     */
    public $edges;

    /**
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'edges' => 'Edges',
        'nodes' => 'Nodes',
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

        return $model;
    }
}
