<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetWorkflowTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishTimeUtc;

    /**
     * @var string
     */
    public $gmtCreateUtc;

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
    public $requestId;

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
    public $workflowId;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'finishTimeUtc' => 'FinishTimeUtc',
        'gmtCreateUtc' => 'GmtCreateUtc',
        'nodeResults' => 'NodeResults',
        'outputs' => 'Outputs',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'userData' => 'UserData',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->finishTimeUtc) {
            $res['FinishTimeUtc'] = $this->finishTimeUtc;
        }

        if (null !== $this->gmtCreateUtc) {
            $res['GmtCreateUtc'] = $this->gmtCreateUtc;
        }

        if (null !== $this->nodeResults) {
            $res['NodeResults'] = $this->nodeResults;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FinishTimeUtc'])) {
            $model->finishTimeUtc = $map['FinishTimeUtc'];
        }

        if (isset($map['GmtCreateUtc'])) {
            $model->gmtCreateUtc = $map['GmtCreateUtc'];
        }

        if (isset($map['NodeResults'])) {
            $model->nodeResults = $map['NodeResults'];
        }

        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
