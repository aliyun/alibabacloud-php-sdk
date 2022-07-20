<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponseBody\mediaInfoJob\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponseBody\mediaInfoJob\mediaInfoProperty;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponseBody\mediaInfoJob\scheduleConfig;
use AlibabaCloud\Tea\Model;

class mediaInfoJob extends Model
{
    /**
     * @description 是否异步处理
     *
     * @var bool
     */
    public $async;

    /**
     * @description 任务完成时间
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description 任务输入
     *
     * @var input
     */
    public $input;

    /**
     * @description 任务 id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 媒体信息详情
     *
     * @var mediaInfoProperty
     */
    public $mediaInfoProperty;

    /**
     * @description 任务名字
     *
     * @var string
     */
    public $name;

    /**
     * @description 请求 id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 调度信息
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @description 任务状态 - Init: 已提交, Success: 成功, Fail: 失败
     *
     * @var string
     */
    public $status;

    /**
     * @description 任务提交信息
     *
     * @var mixed[]
     */
    public $submitResultJson;

    /**
     * @description 任务提交时间
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description 任务来源 - API, WorkFlow, Console
     *
     * @var string
     */
    public $triggerSource;

    /**
     * @description 用户数据
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'async'             => 'Async',
        'finishTime'        => 'FinishTime',
        'input'             => 'Input',
        'jobId'             => 'JobId',
        'mediaInfoProperty' => 'MediaInfoProperty',
        'name'              => 'Name',
        'requestId'         => 'RequestId',
        'scheduleConfig'    => 'ScheduleConfig',
        'status'            => 'Status',
        'submitResultJson'  => 'SubmitResultJson',
        'submitTime'        => 'SubmitTime',
        'triggerSource'     => 'TriggerSource',
        'userData'          => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaInfoProperty) {
            $res['MediaInfoProperty'] = null !== $this->mediaInfoProperty ? $this->mediaInfoProperty->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitResultJson) {
            $res['SubmitResultJson'] = $this->submitResultJson;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->triggerSource) {
            $res['TriggerSource'] = $this->triggerSource;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInfoJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaInfoProperty'])) {
            $model->mediaInfoProperty = mediaInfoProperty::fromMap($map['MediaInfoProperty']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitResultJson'])) {
            $model->submitResultJson = $map['SubmitResultJson'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TriggerSource'])) {
            $model->triggerSource = $map['TriggerSource'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
