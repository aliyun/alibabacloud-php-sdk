<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeScheduledTaskExecutionsResponseBody;

use AlibabaCloud\Dara\Model;

class executions extends Model
{
    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var string
     */
    public $configSnapshot;

    /**
     * @var int
     */
    public $durationMs;

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
    public $instanceId;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $scheduledId;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'completedAt' => 'CompletedAt',
        'configSnapshot' => 'ConfigSnapshot',
        'durationMs' => 'DurationMs',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'instanceId' => 'InstanceId',
        'output' => 'Output',
        'scheduledId' => 'ScheduledId',
        'startedAt' => 'StartedAt',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedAt) {
            $res['CompletedAt'] = $this->completedAt;
        }

        if (null !== $this->configSnapshot) {
            $res['ConfigSnapshot'] = $this->configSnapshot;
        }

        if (null !== $this->durationMs) {
            $res['DurationMs'] = $this->durationMs;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->scheduledId) {
            $res['ScheduledId'] = $this->scheduledId;
        }

        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CompletedAt'])) {
            $model->completedAt = $map['CompletedAt'];
        }

        if (isset($map['ConfigSnapshot'])) {
            $model->configSnapshot = $map['ConfigSnapshot'];
        }

        if (isset($map['DurationMs'])) {
            $model->durationMs = $map['DurationMs'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['ScheduledId'])) {
            $model->scheduledId = $map['ScheduledId'];
        }

        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
