<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowNodeInfo\edges;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowNodeInfo\nodes;
use AlibabaCloud\Tea\Model;

class workFlowNodeInfo extends Model
{
    /**
     * @description The workflow edges.
     *
     * @var edges[]
     */
    public $edges;

    /**
     * @description The list of workflow nodes.
     *
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'edges' => 'Edges',
        'nodes' => 'Nodes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->edges) {
            $res['Edges'] = [];
            if (null !== $this->edges && \is_array($this->edges)) {
                $n = 0;
                foreach ($this->edges as $item) {
                    $res['Edges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workFlowNodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edges'])) {
            if (!empty($map['Edges'])) {
                $model->edges = [];
                $n = 0;
                foreach ($map['Edges'] as $item) {
                    $model->edges[$n++] = null !== $item ? edges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
