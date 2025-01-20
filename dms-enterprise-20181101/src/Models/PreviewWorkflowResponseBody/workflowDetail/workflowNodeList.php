<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList\workflowNode;

class workflowNodeList extends Model
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
        if (\is_array($this->workflowNode)) {
            Model::validateArray($this->workflowNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workflowNode) {
            if (\is_array($this->workflowNode)) {
                $res['WorkflowNode'] = [];
                $n1                  = 0;
                foreach ($this->workflowNode as $item1) {
                    $res['WorkflowNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WorkflowNode'])) {
            if (!empty($map['WorkflowNode'])) {
                $model->workflowNode = [];
                $n1                  = 0;
                foreach ($map['WorkflowNode'] as $item1) {
                    $model->workflowNode[$n1++] = workflowNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
