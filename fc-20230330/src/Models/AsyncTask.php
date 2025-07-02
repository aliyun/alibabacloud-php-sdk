<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class AsyncTask extends Model
{
    /**
     * @var int
     */
    public $alreadyRetriedTimes;

    /**
     * @var string
     */
    public $destinationStatus;

    /**
     * @var int
     */
    public $durationMs;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var AsyncTaskEvent[]
     */
    public $events;

    /**
     * @var string
     */
    public $functionArn;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $returnPayload;

    /**
     * @var int
     */
    public $startedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskPayload;
    protected $_name = [
        'alreadyRetriedTimes' => 'alreadyRetriedTimes',
        'destinationStatus' => 'destinationStatus',
        'durationMs' => 'durationMs',
        'endTime' => 'endTime',
        'events' => 'events',
        'functionArn' => 'functionArn',
        'instanceId' => 'instanceId',
        'qualifier' => 'qualifier',
        'requestId' => 'requestId',
        'returnPayload' => 'returnPayload',
        'startedTime' => 'startedTime',
        'status' => 'status',
        'taskErrorMessage' => 'taskErrorMessage',
        'taskId' => 'taskId',
        'taskPayload' => 'taskPayload',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyRetriedTimes) {
            $res['alreadyRetriedTimes'] = $this->alreadyRetriedTimes;
        }

        if (null !== $this->destinationStatus) {
            $res['destinationStatus'] = $this->destinationStatus;
        }

        if (null !== $this->durationMs) {
            $res['durationMs'] = $this->durationMs;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['events'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->functionArn) {
            $res['functionArn'] = $this->functionArn;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->returnPayload) {
            $res['returnPayload'] = $this->returnPayload;
        }

        if (null !== $this->startedTime) {
            $res['startedTime'] = $this->startedTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskErrorMessage) {
            $res['taskErrorMessage'] = $this->taskErrorMessage;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskPayload) {
            $res['taskPayload'] = $this->taskPayload;
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
        if (isset($map['alreadyRetriedTimes'])) {
            $model->alreadyRetriedTimes = $map['alreadyRetriedTimes'];
        }

        if (isset($map['destinationStatus'])) {
            $model->destinationStatus = $map['destinationStatus'];
        }

        if (isset($map['durationMs'])) {
            $model->durationMs = $map['durationMs'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['events'] as $item1) {
                    $model->events[$n1] = AsyncTaskEvent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['functionArn'])) {
            $model->functionArn = $map['functionArn'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['returnPayload'])) {
            $model->returnPayload = $map['returnPayload'];
        }

        if (isset($map['startedTime'])) {
            $model->startedTime = $map['startedTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskErrorMessage'])) {
            $model->taskErrorMessage = $map['taskErrorMessage'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskPayload'])) {
            $model->taskPayload = $map['taskPayload'];
        }

        return $model;
    }
}
