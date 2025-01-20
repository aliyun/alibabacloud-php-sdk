<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList;

class workflowDetail extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $wfCateName;
    /**
     * @var workflowNodeList
     */
    public $workflowNodeList;
    protected $_name = [
        'comment'          => 'Comment',
        'wfCateName'       => 'WfCateName',
        'workflowNodeList' => 'WorkflowNodeList',
    ];

    public function validate()
    {
        if (null !== $this->workflowNodeList) {
            $this->workflowNodeList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->wfCateName) {
            $res['WfCateName'] = $this->wfCateName;
        }

        if (null !== $this->workflowNodeList) {
            $res['WorkflowNodeList'] = null !== $this->workflowNodeList ? $this->workflowNodeList->toArray($noStream) : $this->workflowNodeList;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['WfCateName'])) {
            $model->wfCateName = $map['WfCateName'];
        }

        if (isset($map['WorkflowNodeList'])) {
            $model->workflowNodeList = workflowNodeList::fromMap($map['WorkflowNodeList']);
        }

        return $model;
    }
}
