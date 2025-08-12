<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeJobResponseBody\jobList;

use AlibabaCloud\Dara\Model;

class job extends Model
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
    public $lastStartAt;

    /**
     * @var string
     */
    public $lastStopAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $streamInput;

    /**
     * @var string
     */
    public $streamOutput;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'CreateTime',
        'jobId' => 'JobId',
        'lastStartAt' => 'LastStartAt',
        'lastStopAt' => 'LastStopAt',
        'name' => 'Name',
        'status' => 'Status',
        'streamInput' => 'StreamInput',
        'streamOutput' => 'StreamOutput',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'type' => 'Type',
    ];

    public function validate()
    {
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

        if (null !== $this->lastStartAt) {
            $res['LastStartAt'] = $this->lastStartAt;
        }

        if (null !== $this->lastStopAt) {
            $res['LastStopAt'] = $this->lastStopAt;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->streamInput) {
            $res['StreamInput'] = $this->streamInput;
        }

        if (null !== $this->streamOutput) {
            $res['StreamOutput'] = $this->streamOutput;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['LastStartAt'])) {
            $model->lastStartAt = $map['LastStartAt'];
        }

        if (isset($map['LastStopAt'])) {
            $model->lastStopAt = $map['LastStopAt'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StreamInput'])) {
            $model->streamInput = $map['StreamInput'];
        }

        if (isset($map['StreamOutput'])) {
            $model->streamOutput = $map['StreamOutput'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
