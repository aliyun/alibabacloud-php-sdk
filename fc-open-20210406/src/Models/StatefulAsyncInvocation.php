<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class StatefulAsyncInvocation extends Model
{
    /**
     * @description 异步任务调用失败后的已重试次数。
     *
     * @var int
     */
    public $alreadyRetriedTimes;

    /**
     * @description 异步任务的目的状态。
     *
     * @var string
     */
    public $destinationStatus;

    /**
     * @description 异步任务的结束时间。
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 异步任务事件列表。
     *
     * @var StatefulAsyncInvocationEvent[]
     */
    public $events;

    /**
     * @description 异步任务所属的函数的名称。
     *
     * @var string
     */
    public $functionName;

    /**
     * @description 异步任务的执行实例ID。
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 异步任务的错误消息。
     *
     * @var string
     */
    public $invocationErrorMessage;

    /**
     * @description 异步任务ID。
     *
     * @var string
     */
    public $invocationId;

    /**
     * @description 异步任务的任务触发事件。
     *
     * @var string
     */
    public $invocationPayload;

    /**
     * @description 异步任务所属的服务的别名或版本。
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description 异步任务的请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 异步任务所属的服务的名称。
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 异步任务的开始时间。
     *
     * @var int
     */
    public $startedTime;

    /**
     * @description 异步任务的执行状态。      Enqueued：异步消息已入队，等待处理。      Succeeded：调用执行成功。      Failed：调用执行失败。      Running：调用执行中。      Stopped：调用执行终止。      Stopping：执行停止中。      Invalid：您的执行因函数被删除等原因处于无效状态（任务未被执行）。      Expired：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。      Retrying：异步调用因执行错误重试中。
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'alreadyRetriedTimes'    => 'alreadyRetriedTimes',
        'destinationStatus'      => 'destinationStatus',
        'endTime'                => 'endTime',
        'events'                 => 'events',
        'functionName'           => 'functionName',
        'instanceId'             => 'instanceId',
        'invocationErrorMessage' => 'invocationErrorMessage',
        'invocationId'           => 'invocationId',
        'invocationPayload'      => 'invocationPayload',
        'qualifier'              => 'qualifier',
        'requestId'              => 'requestId',
        'serviceName'            => 'serviceName',
        'startedTime'            => 'startedTime',
        'status'                 => 'status',
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
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationErrorMessage) {
            $res['invocationErrorMessage'] = $this->invocationErrorMessage;
        }
        if (null !== $this->invocationId) {
            $res['invocationId'] = $this->invocationId;
        }
        if (null !== $this->invocationPayload) {
            $res['invocationPayload'] = $this->invocationPayload;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->startedTime) {
            $res['startedTime'] = $this->startedTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StatefulAsyncInvocation
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['events'] as $item) {
                    $model->events[$n++] = null !== $item ? StatefulAsyncInvocationEvent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['invocationErrorMessage'])) {
            $model->invocationErrorMessage = $map['invocationErrorMessage'];
        }
        if (isset($map['invocationId'])) {
            $model->invocationId = $map['invocationId'];
        }
        if (isset($map['invocationPayload'])) {
            $model->invocationPayload = $map['invocationPayload'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['startedTime'])) {
            $model->startedTime = $map['startedTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
