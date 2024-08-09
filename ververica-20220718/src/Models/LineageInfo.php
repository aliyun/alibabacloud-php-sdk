<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'edges'    => 'edges',
        'jobInfos' => 'jobInfos',
        'nodes'    => 'nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edges) {
            $res['edges'] = null !== $this->edges ? $this->edges->toMap() : null;
        }
        if (null !== $this->jobInfos) {
            $res['jobInfos'] = [];
            if (null !== $this->jobInfos && \is_array($this->jobInfos)) {
                $n = 0;
                foreach ($this->jobInfos as $item) {
                    $res['jobInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LineageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['edges'])) {
            $model->edges = Edge::fromMap($map['edges']);
        }
        if (isset($map['jobInfos'])) {
            if (!empty($map['jobInfos'])) {
                $model->jobInfos = [];
                $n               = 0;
                foreach ($map['jobInfos'] as $item) {
                    $model->jobInfos[$n++] = null !== $item ? JobInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? Node::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
