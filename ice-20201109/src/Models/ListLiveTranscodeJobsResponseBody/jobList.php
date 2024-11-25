<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponseBody\jobList\outputStream;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponseBody\jobList\streamInput;
use AlibabaCloud\Tea\Model;

class jobList extends Model
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
     * @description The job ID.
     *
     * @example ****a046-263c-3560-978a-fb287782****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the transcoding job.
     *
     * @example mytask
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
     * @description The ID of the transcoding template used by the transcoding job.
     *
     * @example ****a046-263c-3560-978a-fb287666****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template name.
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the transcoding template used by the transcoding job.
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
     * @return jobList
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
