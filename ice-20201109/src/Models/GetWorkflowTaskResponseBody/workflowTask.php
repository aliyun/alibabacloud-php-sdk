<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponseBody\workflowTask\workflow;

class workflowTask extends Model
{
    /**
     * @var string
     */
    public $activityResults;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $finishTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskInput;
    /**
     * @var string
     */
    public $userData;
    /**
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
        if (null !== $this->workflow) {
            $this->workflow->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Workflow'] = null !== $this->workflow ? $this->workflow->toArray($noStream) : $this->workflow;
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
