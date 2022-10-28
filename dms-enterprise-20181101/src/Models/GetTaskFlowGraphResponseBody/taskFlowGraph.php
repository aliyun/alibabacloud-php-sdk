<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph\edges;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph\nodes;
use AlibabaCloud\Tea\Model;

class taskFlowGraph extends Model
{
    /**
     * @var bool
     */
    public $canEdit;

    /**
     * @var string
     */
    public $dagName;

    /**
     * @var edges
     */
    public $edges;

    /**
     * @var nodes
     */
    public $nodes;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'canEdit' => 'CanEdit',
        'dagName' => 'DagName',
        'edges'   => 'Edges',
        'nodes'   => 'Nodes',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canEdit) {
            $res['CanEdit'] = $this->canEdit;
        }
        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }
        if (null !== $this->edges) {
            $res['Edges'] = null !== $this->edges ? $this->edges->toMap() : null;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskFlowGraph
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanEdit'])) {
            $model->canEdit = $map['CanEdit'];
        }
        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }
        if (isset($map['Edges'])) {
            $model->edges = edges::fromMap($map['Edges']);
        }
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
