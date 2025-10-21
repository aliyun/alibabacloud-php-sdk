<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class LineageInfo extends Model
{
    /**
     * @var Edge
     */
    public $edges;

    /**
     * @var JobInfo[]
     */
    public $jobInfos;

    /**
     * @var Node[]
     */
    public $nodes;
    protected $_name = [
        'edges' => 'edges',
        'jobInfos' => 'jobInfos',
        'nodes' => 'nodes',
    ];

    public function validate()
    {
        if (null !== $this->edges) {
            $this->edges->validate();
        }
        if (\is_array($this->jobInfos)) {
            Model::validateArray($this->jobInfos);
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
            $res['edges'] = null !== $this->edges ? $this->edges->toArray($noStream) : $this->edges;
        }

        if (null !== $this->jobInfos) {
            if (\is_array($this->jobInfos)) {
                $res['jobInfos'] = [];
                $n1 = 0;
                foreach ($this->jobInfos as $item1) {
                    $res['jobInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['edges'])) {
            $model->edges = Edge::fromMap($map['edges']);
        }

        if (isset($map['jobInfos'])) {
            if (!empty($map['jobInfos'])) {
                $model->jobInfos = [];
                $n1 = 0;
                foreach ($map['jobInfos'] as $item1) {
                    $model->jobInfos[$n1] = JobInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1] = Node::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
