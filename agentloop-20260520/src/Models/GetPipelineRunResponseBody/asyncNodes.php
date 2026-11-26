<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRunResponseBody;

use AlibabaCloud\Dara\Model;

class asyncNodes extends Model
{
    /**
     * @var int
     */
    public $attempt;

    /**
     * @var string
     */
    public $externalTaskId;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $itemReadyCount;

    /**
     * @var string
     */
    public $lastError;

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
    public $outputTokens;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var bool
     */
    public $routed;

    /**
     * @var string
     */
    public $signalType;

    /**
     * @var int
     */
    public $startAttempts;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskVersion;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'attempt' => 'attempt',
        'externalTaskId' => 'externalTaskId',
        'failedCount' => 'failedCount',
        'inputTokens' => 'inputTokens',
        'itemReadyCount' => 'itemReadyCount',
        'lastError' => 'lastError',
        'nodeExecutionId' => 'nodeExecutionId',
        'nodeId' => 'nodeId',
        'nodeType' => 'nodeType',
        'outputTokens' => 'outputTokens',
        'recordCount' => 'recordCount',
        'routed' => 'routed',
        'signalType' => 'signalType',
        'startAttempts' => 'startAttempts',
        'status' => 'status',
        'taskVersion' => 'taskVersion',
        'totalTokens' => 'totalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attempt) {
            $res['attempt'] = $this->attempt;
        }

        if (null !== $this->externalTaskId) {
            $res['externalTaskId'] = $this->externalTaskId;
        }

        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->itemReadyCount) {
            $res['itemReadyCount'] = $this->itemReadyCount;
        }

        if (null !== $this->lastError) {
            $res['lastError'] = $this->lastError;
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

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->recordCount) {
            $res['recordCount'] = $this->recordCount;
        }

        if (null !== $this->routed) {
            $res['routed'] = $this->routed;
        }

        if (null !== $this->signalType) {
            $res['signalType'] = $this->signalType;
        }

        if (null !== $this->startAttempts) {
            $res['startAttempts'] = $this->startAttempts;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskVersion) {
            $res['taskVersion'] = $this->taskVersion;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
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

        if (isset($map['externalTaskId'])) {
            $model->externalTaskId = $map['externalTaskId'];
        }

        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['itemReadyCount'])) {
            $model->itemReadyCount = $map['itemReadyCount'];
        }

        if (isset($map['lastError'])) {
            $model->lastError = $map['lastError'];
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

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['recordCount'])) {
            $model->recordCount = $map['recordCount'];
        }

        if (isset($map['routed'])) {
            $model->routed = $map['routed'];
        }

        if (isset($map['signalType'])) {
            $model->signalType = $map['signalType'];
        }

        if (isset($map['startAttempts'])) {
            $model->startAttempts = $map['startAttempts'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskVersion'])) {
            $model->taskVersion = $map['taskVersion'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}
