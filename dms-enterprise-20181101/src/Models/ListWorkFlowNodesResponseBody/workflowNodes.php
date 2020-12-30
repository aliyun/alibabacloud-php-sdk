<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes\workflowNode;
use AlibabaCloud\Tea\Model;

class workflowNodes extends Model
{
    /**
     * @var workflowNode[]
     */
    public $workflowNode;
    protected $_name = [
        'workflowNode' => 'WorkflowNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workflowNode) {
            $res['WorkflowNode'] = [];
            if (null !== $this->workflowNode && \is_array($this->workflowNode)) {
                $n = 0;
                foreach ($this->workflowNode as $item) {
                    $res['WorkflowNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkflowNode'])) {
            if (!empty($map['WorkflowNode'])) {
                $model->workflowNode = [];
                $n                   = 0;
                foreach ($map['WorkflowNode'] as $item) {
                    $model->workflowNode[$n++] = null !== $item ? workflowNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
