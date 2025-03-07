<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody\job\outputStream;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody\job\streamInput;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @description The time when the job was created.
     *
     * @example 2022-07-20T02:48:58Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the transcoding job.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the transcoding job.
     *
     * @example task1
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the output stream.
     *
     * @var outputStream
     */
    public $outputStream;

    /**
     * @description The start mode of the job.
     *
     * @example 0
     *
     * @var int
     */
    public $startMode;

    /**
     * @description The state of the job.
     *
     *   0: The job is not started.
     *   1: The job is in progress.
     *   2: The job is stopped.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The information about the input stream.
     *
     * @var streamInput
     */
    public $streamInput;

    /**
     * @description The template ID.
     *
     * @example b6491d5b3e514b7d895d14b5453ea119
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template name.
     *
     * @example basic
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the template.
     *
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
