<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCreateWorkflowInstancesResultResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $failureMessage;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int[]
     */
    public $workflowInstanceIds;
    protected $_name = [
        'failureMessage'      => 'FailureMessage',
        'status'              => 'Status',
        'workflowInstanceIds' => 'WorkflowInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->workflowInstanceIds)) {
            Model::validateArray($this->workflowInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureMessage) {
            $res['FailureMessage'] = $this->failureMessage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->workflowInstanceIds) {
            if (\is_array($this->workflowInstanceIds)) {
                $res['WorkflowInstanceIds'] = [];
                $n1                         = 0;
                foreach ($this->workflowInstanceIds as $item1) {
                    $res['WorkflowInstanceIds'][$n1++] = $item1;
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
        if (isset($map['FailureMessage'])) {
            $model->failureMessage = $map['FailureMessage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkflowInstanceIds'])) {
            if (!empty($map['WorkflowInstanceIds'])) {
                $model->workflowInstanceIds = [];
                $n1                         = 0;
                foreach ($map['WorkflowInstanceIds'] as $item1) {
                    $model->workflowInstanceIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
