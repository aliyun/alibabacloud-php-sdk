<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCreateWorkflowInstancesResultResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The error message. This parameter is returned only if the creation fails.
     *
     * @example Invalid Param xxx
     *
     * @var string
     */
    public $failureMessage;

    /**
     * @description The creation status. Valid values:
     *
     *   Creating
     *   Created
     *   CreateFailure
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The workflow instance IDs. This parameter is returned only if the creation is successful.
     *
     * @var int[]
     */
    public $workflowInstanceIds;
    protected $_name = [
        'failureMessage' => 'FailureMessage',
        'status' => 'Status',
        'workflowInstanceIds' => 'WorkflowInstanceIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureMessage) {
            $res['FailureMessage'] = $this->failureMessage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workflowInstanceIds) {
            $res['WorkflowInstanceIds'] = $this->workflowInstanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
                $model->workflowInstanceIds = $map['WorkflowInstanceIds'];
            }
        }

        return $model;
    }
}
