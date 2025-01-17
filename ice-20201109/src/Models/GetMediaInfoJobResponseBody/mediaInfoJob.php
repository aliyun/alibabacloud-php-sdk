<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobResponseBody\mediaInfoJob\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobResponseBody\mediaInfoJob\mediaInfoProperty;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobResponseBody\mediaInfoJob\scheduleConfig;

class mediaInfoJob extends Model
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
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->mediaInfoProperty) {
            $this->mediaInfoProperty->validate();
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        if (\is_array($this->submitResultJson)) {
            Model::validateArray($this->submitResultJson);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->mediaInfoProperty) {
            $res['MediaInfoProperty'] = null !== $this->mediaInfoProperty ? $this->mediaInfoProperty->toArray($noStream) : $this->mediaInfoProperty;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submitResultJson) {
            if (\is_array($this->submitResultJson)) {
                $res['SubmitResultJson'] = [];
                foreach ($this->submitResultJson as $key1 => $value1) {
                    $res['SubmitResultJson'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['SubmitResultJson'])) {
                $model->submitResultJson = [];
                foreach ($map['SubmitResultJson'] as $key1 => $value1) {
                    $model->submitResultJson[$key1] = $value1;
                }
            }
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
