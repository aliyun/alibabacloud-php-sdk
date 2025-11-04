<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAIWorkflowTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAIWorkflowTaskResponseBody\workflowTask\workflow;

class workflowTask extends Model
{
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
    public $inputs;

    /**
     * @var string
     */
    public $nodeResults;

    /**
     * @var string
     */
    public $outputs;

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
    public $userData;

    /**
     * @var string
     */
    public $version;

    /**
     * @var workflow
     */
    public $workflow;
    protected $_name = [
        'createTime' => 'CreateTime',
        'finishTime' => 'FinishTime',
        'inputs' => 'Inputs',
        'nodeResults' => 'NodeResults',
        'outputs' => 'Outputs',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'userData' => 'UserData',
        'version' => 'Version',
        'workflow' => 'Workflow',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
        }

        if (null !== $this->nodeResults) {
            $res['NodeResults'] = $this->nodeResults;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
        }

        if (isset($map['NodeResults'])) {
            $model->nodeResults = $map['NodeResults'];
        }

        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['Workflow'])) {
            $model->workflow = workflow::fromMap($map['Workflow']);
        }

        return $model;
    }
}
