<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody\liveRecordJobs\recordOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody\liveRecordJobs\streamInput;

class liveRecordJobs extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $notifyUrl;
    /**
     * @var recordOutput
     */
    public $recordOutput;
    /**
     * @var string
     */
    public $status;
    /**
     * @var streamInput
     */
    public $streamInput;
    /**
     * @var string
     */
    public $templateId;
    /**
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
        if (null !== $this->recordOutput) {
            $this->recordOutput->validate();
        }
        if (null !== $this->streamInput) {
            $this->streamInput->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RecordOutput'] = null !== $this->recordOutput ? $this->recordOutput->toArray($noStream) : $this->recordOutput;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toArray($noStream) : $this->streamInput;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
