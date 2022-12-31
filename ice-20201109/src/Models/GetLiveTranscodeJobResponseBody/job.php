<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody\job\outputStream;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody\job\streamInput;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @example 2022-07-20T02:48:58Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example task1
     *
     * @var string
     */
    public $name;

    /**
     * @var outputStream
     */
    public $outputStream;

    /**
     * @example 0
     *
     * @var int
     */
    public $startMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var streamInput
     */
    public $streamInput;

    /**
     * @example b6491d5b3e514b7d895d14b5453ea119
     *
     * @var string
     */
    public $templateId;

    /**
     * @example basic
     *
     * @var string
     */
    public $templateName;

    /**
     * @example normal
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'jobId'        => 'JobId',
        'name'         => 'Name',
        'outputStream' => 'OutputStream',
        'startMode'    => 'StartMode',
        'status'       => 'Status',
        'streamInput'  => 'StreamInput',
        'templateId'   => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputStream) {
            $res['OutputStream'] = null !== $this->outputStream ? $this->outputStream->toMap() : null;
        }
        if (null !== $this->startMode) {
            $res['StartMode'] = $this->startMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputStream'])) {
            $model->outputStream = outputStream::fromMap($map['OutputStream']);
        }
        if (isset($map['StartMode'])) {
            $model->startMode = $map['StartMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamInput'])) {
            $model->streamInput = streamInput::fromMap($map['StreamInput']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
