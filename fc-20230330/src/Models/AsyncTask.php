<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class AsyncTask extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $alreadyRetriedTimes;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $destinationStatus;

    /**
     * @example 1000
     *
     * @var int
     */
    public $durationMs;

    /**
     * @example 1633449590000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var AsyncTaskEvent[]
     */
    public $events;

    /**
     * @example acs:fc:cn-shanghai:1234/functions/my-func
     *
     * @var string
     */
    public $functionArn;

    /**
     * @example D4-*******9FD1-882707E
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example prod
     *
     * @var string
     */
    public $qualifier;

    /**
     * @example e026ae92-61e5-472f-b32d-1c9e3c4e****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example result
     *
     * @var string
     */
    public $returnPayload;

    /**
     * @example 1633449590000
     *
     * @var int
     */
    public $startedTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example UnhandledInvocationError
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @example e026ae92-61e5-472f-b32d-1c9e3c4e****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example body
     *
     * @var string
     */
    public $taskPayload;
    protected $_name = [
        'alreadyRetriedTimes' => 'alreadyRetriedTimes',
        'destinationStatus'   => 'destinationStatus',
        'durationMs'          => 'durationMs',
        'endTime'             => 'endTime',
        'events'              => 'events',
        'functionArn'         => 'functionArn',
        'instanceId'          => 'instanceId',
        'qualifier'           => 'qualifier',
        'requestId'           => 'requestId',
        'returnPayload'       => 'returnPayload',
        'startedTime'         => 'startedTime',
        'status'              => 'status',
        'taskErrorMessage'    => 'taskErrorMessage',
        'taskId'              => 'taskId',
        'taskPayload'         => 'taskPayload',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['events'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return AsyncTask
     */
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
                $n             = 0;
                foreach ($map['events'] as $item) {
                    $model->events[$n++] = null !== $item ? AsyncTaskEvent::fromMap($item) : $item;
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
