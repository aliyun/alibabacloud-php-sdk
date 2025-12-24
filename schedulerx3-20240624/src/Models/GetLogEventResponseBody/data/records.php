<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogEventResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $jobExecutionId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $workerAddr;

    /**
     * @var string
     */
    public $workflowExecutionId;

    /**
     * @var string
     */
    public $workflowName;
    protected $_name = [
        'appName' => 'AppName',
        'content' => 'Content',
        'event' => 'Event',
        'eventType' => 'EventType',
        'jobExecutionId' => 'JobExecutionId',
        'jobName' => 'JobName',
        'time' => 'Time',
        'workerAddr' => 'WorkerAddr',
        'workflowExecutionId' => 'WorkflowExecutionId',
        'workflowName' => 'WorkflowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->workerAddr) {
            $res['WorkerAddr'] = $this->workerAddr;
        }

        if (null !== $this->workflowExecutionId) {
            $res['WorkflowExecutionId'] = $this->workflowExecutionId;
        }

        if (null !== $this->workflowName) {
            $res['WorkflowName'] = $this->workflowName;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['WorkerAddr'])) {
            $model->workerAddr = $map['WorkerAddr'];
        }

        if (isset($map['WorkflowExecutionId'])) {
            $model->workflowExecutionId = $map['WorkflowExecutionId'];
        }

        if (isset($map['WorkflowName'])) {
            $model->workflowName = $map['WorkflowName'];
        }

        return $model;
    }
}
