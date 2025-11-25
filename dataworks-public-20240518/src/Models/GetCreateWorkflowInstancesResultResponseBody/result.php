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
    public $unifiedWorkflowInstanceIds;

    /**
     * @var int[]
     */
    public $workflowInstanceIds;

    /**
     * @var int[]
     */
    public $workflowTaskInstanceIds;
    protected $_name = [
        'failureMessage' => 'FailureMessage',
        'status' => 'Status',
        'unifiedWorkflowInstanceIds' => 'UnifiedWorkflowInstanceIds',
        'workflowInstanceIds' => 'WorkflowInstanceIds',
        'workflowTaskInstanceIds' => 'WorkflowTaskInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->unifiedWorkflowInstanceIds)) {
            Model::validateArray($this->unifiedWorkflowInstanceIds);
        }
        if (\is_array($this->workflowInstanceIds)) {
            Model::validateArray($this->workflowInstanceIds);
        }
        if (\is_array($this->workflowTaskInstanceIds)) {
            Model::validateArray($this->workflowTaskInstanceIds);
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

        if (null !== $this->unifiedWorkflowInstanceIds) {
            if (\is_array($this->unifiedWorkflowInstanceIds)) {
                $res['UnifiedWorkflowInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->unifiedWorkflowInstanceIds as $item1) {
                    $res['UnifiedWorkflowInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workflowInstanceIds) {
            if (\is_array($this->workflowInstanceIds)) {
                $res['WorkflowInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->workflowInstanceIds as $item1) {
                    $res['WorkflowInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workflowTaskInstanceIds) {
            if (\is_array($this->workflowTaskInstanceIds)) {
                $res['WorkflowTaskInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->workflowTaskInstanceIds as $item1) {
                    $res['WorkflowTaskInstanceIds'][$n1] = $item1;
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
        if (isset($map['FailureMessage'])) {
            $model->failureMessage = $map['FailureMessage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnifiedWorkflowInstanceIds'])) {
            if (!empty($map['UnifiedWorkflowInstanceIds'])) {
                $model->unifiedWorkflowInstanceIds = [];
                $n1 = 0;
                foreach ($map['UnifiedWorkflowInstanceIds'] as $item1) {
                    $model->unifiedWorkflowInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkflowInstanceIds'])) {
            if (!empty($map['WorkflowInstanceIds'])) {
                $model->workflowInstanceIds = [];
                $n1 = 0;
                foreach ($map['WorkflowInstanceIds'] as $item1) {
                    $model->workflowInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkflowTaskInstanceIds'])) {
            if (!empty($map['WorkflowTaskInstanceIds'])) {
                $model->workflowTaskInstanceIds = [];
                $n1 = 0;
                foreach ($map['WorkflowTaskInstanceIds'] as $item1) {
                    $model->workflowTaskInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
