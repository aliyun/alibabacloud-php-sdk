<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListOptimizeRunsResponseBody;

use AlibabaCloud\Dara\Model;

class optimizeRuns extends Model
{
    /**
     * @var int
     */
    public $attemptCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentStage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var int
     */
    public $maxAttempts;

    /**
     * @var string
     */
    public $optimizeRunId;

    /**
     * @var string
     */
    public $optimizeTaskName;

    /**
     * @var mixed[]
     */
    public $progress;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $trajectoryCount;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $windowEndTime;

    /**
     * @var int
     */
    public $windowStartTime;
    protected $_name = [
        'attemptCount' => 'attemptCount',
        'createTime' => 'createTime',
        'currentStage' => 'currentStage',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'extra' => 'extra',
        'finishTime' => 'finishTime',
        'maxAttempts' => 'maxAttempts',
        'optimizeRunId' => 'optimizeRunId',
        'optimizeTaskName' => 'optimizeTaskName',
        'progress' => 'progress',
        'startTime' => 'startTime',
        'status' => 'status',
        'trajectoryCount' => 'trajectoryCount',
        'triggerType' => 'triggerType',
        'type' => 'type',
        'windowEndTime' => 'windowEndTime',
        'windowStartTime' => 'windowStartTime',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (\is_array($this->progress)) {
            Model::validateArray($this->progress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attemptCount) {
            $res['attemptCount'] = $this->attemptCount;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->currentStage) {
            $res['currentStage'] = $this->currentStage;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->maxAttempts) {
            $res['maxAttempts'] = $this->maxAttempts;
        }

        if (null !== $this->optimizeRunId) {
            $res['optimizeRunId'] = $this->optimizeRunId;
        }

        if (null !== $this->optimizeTaskName) {
            $res['optimizeTaskName'] = $this->optimizeTaskName;
        }

        if (null !== $this->progress) {
            if (\is_array($this->progress)) {
                $res['progress'] = [];
                foreach ($this->progress as $key1 => $value1) {
                    $res['progress'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->trajectoryCount) {
            $res['trajectoryCount'] = $this->trajectoryCount;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->windowEndTime) {
            $res['windowEndTime'] = $this->windowEndTime;
        }

        if (null !== $this->windowStartTime) {
            $res['windowStartTime'] = $this->windowStartTime;
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
        if (isset($map['attemptCount'])) {
            $model->attemptCount = $map['attemptCount'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentStage'])) {
            $model->currentStage = $map['currentStage'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['extra'])) {
            if (!empty($map['extra'])) {
                $model->extra = [];
                foreach ($map['extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['maxAttempts'])) {
            $model->maxAttempts = $map['maxAttempts'];
        }

        if (isset($map['optimizeRunId'])) {
            $model->optimizeRunId = $map['optimizeRunId'];
        }

        if (isset($map['optimizeTaskName'])) {
            $model->optimizeTaskName = $map['optimizeTaskName'];
        }

        if (isset($map['progress'])) {
            if (!empty($map['progress'])) {
                $model->progress = [];
                foreach ($map['progress'] as $key1 => $value1) {
                    $model->progress[$key1] = $value1;
                }
            }
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['trajectoryCount'])) {
            $model->trajectoryCount = $map['trajectoryCount'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['windowEndTime'])) {
            $model->windowEndTime = $map['windowEndTime'];
        }

        if (isset($map['windowStartTime'])) {
            $model->windowStartTime = $map['windowStartTime'];
        }

        return $model;
    }
}
