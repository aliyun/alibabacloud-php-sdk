<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRunResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRunResponseBody\nodeExecutions\inputRef;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRunResponseBody\nodeExecutions\outputRef;

class nodeExecutions extends Model
{
    /**
     * @var int
     */
    public $attempt;

    /**
     * @var string
     */
    public $completionEventId;

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
    public $externalTaskId;

    /**
     * @var string
     */
    public $finishedAtTime;

    /**
     * @var int
     */
    public $inputCount;

    /**
     * @var inputRef
     */
    public $inputRef;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $nodeExecutionId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $order;

    /**
     * @var int
     */
    public $outputCount;

    /**
     * @var outputRef
     */
    public $outputRef;

    /**
     * @var string
     */
    public $outputStartResource;

    /**
     * @var int
     */
    public $outputStartSeq;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $startedAtTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskVersion;
    protected $_name = [
        'attempt' => 'attempt',
        'completionEventId' => 'completionEventId',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'externalTaskId' => 'externalTaskId',
        'finishedAtTime' => 'finishedAtTime',
        'inputCount' => 'inputCount',
        'inputRef' => 'inputRef',
        'mode' => 'mode',
        'nodeExecutionId' => 'nodeExecutionId',
        'nodeId' => 'nodeId',
        'nodeType' => 'nodeType',
        'order' => 'order',
        'outputCount' => 'outputCount',
        'outputRef' => 'outputRef',
        'outputStartResource' => 'outputStartResource',
        'outputStartSeq' => 'outputStartSeq',
        'runId' => 'runId',
        'startedAtTime' => 'startedAtTime',
        'status' => 'status',
        'taskVersion' => 'taskVersion',
    ];

    public function validate()
    {
        if (null !== $this->inputRef) {
            $this->inputRef->validate();
        }
        if (null !== $this->outputRef) {
            $this->outputRef->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attempt) {
            $res['attempt'] = $this->attempt;
        }

        if (null !== $this->completionEventId) {
            $res['completionEventId'] = $this->completionEventId;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->externalTaskId) {
            $res['externalTaskId'] = $this->externalTaskId;
        }

        if (null !== $this->finishedAtTime) {
            $res['finishedAtTime'] = $this->finishedAtTime;
        }

        if (null !== $this->inputCount) {
            $res['inputCount'] = $this->inputCount;
        }

        if (null !== $this->inputRef) {
            $res['inputRef'] = null !== $this->inputRef ? $this->inputRef->toArray($noStream) : $this->inputRef;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->nodeExecutionId) {
            $res['nodeExecutionId'] = $this->nodeExecutionId;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->outputCount) {
            $res['outputCount'] = $this->outputCount;
        }

        if (null !== $this->outputRef) {
            $res['outputRef'] = null !== $this->outputRef ? $this->outputRef->toArray($noStream) : $this->outputRef;
        }

        if (null !== $this->outputStartResource) {
            $res['outputStartResource'] = $this->outputStartResource;
        }

        if (null !== $this->outputStartSeq) {
            $res['outputStartSeq'] = $this->outputStartSeq;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->startedAtTime) {
            $res['startedAtTime'] = $this->startedAtTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskVersion) {
            $res['taskVersion'] = $this->taskVersion;
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
        if (isset($map['attempt'])) {
            $model->attempt = $map['attempt'];
        }

        if (isset($map['completionEventId'])) {
            $model->completionEventId = $map['completionEventId'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['externalTaskId'])) {
            $model->externalTaskId = $map['externalTaskId'];
        }

        if (isset($map['finishedAtTime'])) {
            $model->finishedAtTime = $map['finishedAtTime'];
        }

        if (isset($map['inputCount'])) {
            $model->inputCount = $map['inputCount'];
        }

        if (isset($map['inputRef'])) {
            $model->inputRef = inputRef::fromMap($map['inputRef']);
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['nodeExecutionId'])) {
            $model->nodeExecutionId = $map['nodeExecutionId'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['outputCount'])) {
            $model->outputCount = $map['outputCount'];
        }

        if (isset($map['outputRef'])) {
            $model->outputRef = outputRef::fromMap($map['outputRef']);
        }

        if (isset($map['outputStartResource'])) {
            $model->outputStartResource = $map['outputStartResource'];
        }

        if (isset($map['outputStartSeq'])) {
            $model->outputStartSeq = $map['outputStartSeq'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['startedAtTime'])) {
            $model->startedAtTime = $map['startedAtTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskVersion'])) {
            $model->taskVersion = $map['taskVersion'];
        }

        return $model;
    }
}
