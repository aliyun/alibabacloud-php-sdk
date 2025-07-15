<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\GetEdgeTranscodeJobResponseBody;

use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2023-07-24T16:44:55Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the task.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The time when the task was last started.
     *
     * @example 2023-07-25T02:48:58Z
     *
     * @var string
     */
    public $lastStartAt;

    /**
     * @description The time when the task was last stopped.
     *
     * @example 2023-07-25T05:48:58Z
     *
     * @var string
     */
    public $lastStopAt;

    /**
     * @description The name of the task.
     *
     * @example my_job
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the task. Valid values:
     *
     *   0: not started
     *   1: in progress
     *
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @description The URL of the input stream.
     *
     * @example rtmp://mydomain/app/stream1
     *
     * @var string
     */
    public $streamInput;

    /**
     * @description The URL of the output stream.
     *
     * @example rtmp://testdomain/app/stream2
     *
     * @var string
     */
    public $streamOutput;

    /**
     * @description The ID of the edge transcoding template used by the task.
     *
     * @example 9b1571b513cb44f7a1ba6ae561ff****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the edge transcoding template used by the task.
     *
     * @example my_template
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of edge transcoding. Valid values:
     *
     *   common: standard transcoding and Narrowband HD™ 1.0 transcoding
     *   nbhd-2: Narrowband HD™ 2.0 transcoding
     *   ultra-hd: ultra-high definition transcoding
     *
     * @example common
     *
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

    public function validate() {}

    public function toMap()
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
