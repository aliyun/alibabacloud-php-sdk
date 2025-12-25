<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteWorkflowResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $workflowExecutionId;
    protected $_name = [
        'workflowExecutionId' => 'WorkflowExecutionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workflowExecutionId) {
            $res['WorkflowExecutionId'] = $this->workflowExecutionId;
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
        if (isset($map['WorkflowExecutionId'])) {
            $model->workflowExecutionId = $map['WorkflowExecutionId'];
        }

        return $model;
    }
}
