<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody\liveRecordJobs\recordOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody\liveRecordJobs\streamInput;
use AlibabaCloud\Tea\Model;

class liveRecordJobs extends Model
{
    /**
     * @description The time when the job was created.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     * @example 2022-07-20T03:26:36Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the recording job.
     *
     * @example ab0e3e76-1e9d-11ed-ba64-0c42a1b73d66
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the recording job.
     *
     * @var string
     */
    public $name;

    /**
     * @description The callback URL.
     *
     * @example https://example.com/imsnotify
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The storage address of the recording.
     *
     * @var recordOutput
     */
    public $recordOutput;

    /**
     * @description The state of the recording job.
     *
     * @example paused
     *
     * @var string
     */
    public $status;

    /**
     * @description The URL of the live stream.
     *
     * @var streamInput
     */
    public $streamInput;

    /**
     * @description The ID of the recording template.
     *
     * @example 69e1f9fe-1e97-11ed-ba64-0c42a1b73d66
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the recording template.
     *
     * @example test template
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'jobId'        => 'JobId',
        'name'         => 'Name',
        'notifyUrl'    => 'NotifyUrl',
        'recordOutput' => 'RecordOutput',
        'status'       => 'Status',
        'streamInput'  => 'StreamInput',
        'templateId'   => 'TemplateId',
        'templateName' => 'TemplateName',
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
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->recordOutput) {
            $res['RecordOutput'] = null !== $this->recordOutput ? $this->recordOutput->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveRecordJobs
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
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['RecordOutput'])) {
            $model->recordOutput = recordOutput::fromMap($map['RecordOutput']);
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

        return $model;
    }
}
