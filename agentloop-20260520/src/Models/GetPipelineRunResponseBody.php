<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class GetPipelineRunResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentSpaceName;

    /**
     * @var int
     */
    public $attempt;

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
    public $finishTime;

    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var int
     */
    public $maxAttempts;

    /**
     * @var string
     */
    public $nextRetryTime;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $results;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var mixed[]
     */
    public $stats;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $toTime;

    /**
     * @var string
     */
    public $triggerTime;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'agentSpaceName' => 'agentSpaceName',
        'attempt' => 'attempt',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'finishTime' => 'finishTime',
        'fromTime' => 'fromTime',
        'maxAttempts' => 'maxAttempts',
        'nextRetryTime' => 'nextRetryTime',
        'pipelineName' => 'pipelineName',
        'requestId' => 'requestId',
        'results' => 'results',
        'runId' => 'runId',
        'startTime' => 'startTime',
        'stats' => 'stats',
        'status' => 'status',
        'toTime' => 'toTime',
        'triggerTime' => 'triggerTime',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        if (\is_array($this->stats)) {
            Model::validateArray($this->stats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpaceName) {
            $res['agentSpaceName'] = $this->agentSpaceName;
        }

        if (null !== $this->attempt) {
            $res['attempt'] = $this->attempt;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->maxAttempts) {
            $res['maxAttempts'] = $this->maxAttempts;
        }

        if (null !== $this->nextRetryTime) {
            $res['nextRetryTime'] = $this->nextRetryTime;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                foreach ($this->results as $key1 => $value1) {
                    $res['results'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->stats) {
            if (\is_array($this->stats)) {
                $res['stats'] = [];
                foreach ($this->stats as $key1 => $value1) {
                    $res['stats'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }

        if (null !== $this->triggerTime) {
            $res['triggerTime'] = $this->triggerTime;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
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
        if (isset($map['agentSpaceName'])) {
            $model->agentSpaceName = $map['agentSpaceName'];
        }

        if (isset($map['attempt'])) {
            $model->attempt = $map['attempt'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['maxAttempts'])) {
            $model->maxAttempts = $map['maxAttempts'];
        }

        if (isset($map['nextRetryTime'])) {
            $model->nextRetryTime = $map['nextRetryTime'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                foreach ($map['results'] as $key1 => $value1) {
                    $model->results[$key1] = $value1;
                }
            }
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['stats'])) {
            if (!empty($map['stats'])) {
                $model->stats = [];
                foreach ($map['stats'] as $key1 => $value1) {
                    $model->stats[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        if (isset($map['triggerTime'])) {
            $model->triggerTime = $map['triggerTime'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
