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
     * @description Indicates whether asynchronous processing was performed.
     *
     * @example true
     *
     * @var bool
     */
    public $async;

    /**
     * @description The time when the job was complete. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-01-12T08:49:41Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The input of the job.
     *
     * @var input
     */
    public $input;

    /**
     * @description The job ID.
     *
     * @example ab4802364a2e49208c99efab82dfa8e8
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The details of the media information.
     *
     * @var mediaInfoProperty
     */
    public $mediaInfoProperty;

    /**
     * @description The job name.
     *
     * @example job-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 4879B9DE-E4B6-19DC-91F5-9D5F4DCE4168
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The scheduling information.
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @description The state of the job. Valid values: Init (the job is submitted), Success (the job is successful), and Fail (the job failed).
     *
     * @example Init
     *
     * @var string
     */
    public $status;

    /**
     * @description The job submission information.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $submitResultJson;

    /**
     * @description The time when the job was submitted. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-01-12T08:49:41Z
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The source of the job. Valid values: API, WorkFlow, and Console.
     *
     * @example API
     *
     * @var string
     */
    public $triggerSource;

    /**
     * @description The user data.
     *
     * @example user-data
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
