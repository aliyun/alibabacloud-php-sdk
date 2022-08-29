<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponseBody\jobs\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponseBody\jobs\mediaInfoProperty;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponseBody\jobs\scheduleConfig;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var mediaInfoProperty
     */
    public $mediaInfoProperty;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $submitResultJson;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $triggerSource;

    /**
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
     * @return jobs
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
