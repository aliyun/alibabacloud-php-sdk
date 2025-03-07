<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponseBody\workflowTask\workflow;
use AlibabaCloud\Tea\Model;

class workflowTask extends Model
{
    /**
     * @description The results for all nodes of the workflow task.
     *
     * @var string
     */
    public $activityResults;

    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-01-04T02:05:17Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the task was complete. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-01-04T02:06:19Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The task state.
     *
     * Valid values:
     *
     *   Init: The task is being initialized.
     *   Failed: The task failed.
     *   Canceled: The task is canceled.
     *   Processing: The task is in progress.
     *   Succeed: The task is successful.
     *
     * @example Succeed
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the workflow task.
     *
     * @example ******4215e042b3966ca5441e******
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The input of the workflow task.
     *
     * @example {
     * "Type": "Media",
     * "Media": "******30706071edbfe290b488******"
     * }
     * @var string
     */
    public $taskInput;

    /**
     * @description The user-defined field that was specified when the workflow task was submitted.
     *
     * @example {"NotifyAddress":"http://xx.xx.xxx"}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The workflow Information.
     *
     * @var workflow
     */
    public $workflow;
    protected $_name = [
        'activityResults' => 'ActivityResults',
        'createTime'      => 'CreateTime',
        'finishTime'      => 'FinishTime',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'taskInput'       => 'TaskInput',
        'userData'        => 'UserData',
        'workflow'        => 'Workflow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityResults) {
            $res['ActivityResults'] = $this->activityResults;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskInput) {
            $res['TaskInput'] = $this->taskInput;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->workflow) {
            $res['Workflow'] = null !== $this->workflow ? $this->workflow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityResults'])) {
            $model->activityResults = $map['ActivityResults'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskInput'])) {
            $model->taskInput = $map['TaskInput'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Workflow'])) {
            $model->workflow = workflow::fromMap($map['Workflow']);
        }

        return $model;
    }
}
