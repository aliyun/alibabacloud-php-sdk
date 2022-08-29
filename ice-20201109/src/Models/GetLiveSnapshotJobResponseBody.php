<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobResponseBody\snapshotOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobResponseBody\streamInput;
use AlibabaCloud\Tea\Model;

class GetLiveSnapshotJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

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
    public $jobName;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $overwriteFormat;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sequenceFormat;

    /**
     * @var snapshotOutput
     */
    public $snapshotOutput;

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

    /**
     * @var int
     */
    public $timeInterval;
    protected $_name = [
        'callbackUrl'     => 'CallbackUrl',
        'createTime'      => 'CreateTime',
        'jobId'           => 'JobId',
        'jobName'         => 'JobName',
        'lastModified'    => 'LastModified',
        'overwriteFormat' => 'OverwriteFormat',
        'requestId'       => 'RequestId',
        'sequenceFormat'  => 'SequenceFormat',
        'snapshotOutput'  => 'SnapshotOutput',
        'status'          => 'Status',
        'streamInput'     => 'StreamInput',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'timeInterval'    => 'TimeInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->overwriteFormat) {
            $res['OverwriteFormat'] = $this->overwriteFormat;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sequenceFormat) {
            $res['SequenceFormat'] = $this->sequenceFormat;
        }
        if (null !== $this->snapshotOutput) {
            $res['SnapshotOutput'] = null !== $this->snapshotOutput ? $this->snapshotOutput->toMap() : null;
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
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveSnapshotJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['OverwriteFormat'])) {
            $model->overwriteFormat = $map['OverwriteFormat'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SequenceFormat'])) {
            $model->sequenceFormat = $map['SequenceFormat'];
        }
        if (isset($map['SnapshotOutput'])) {
            $model->snapshotOutput = snapshotOutput::fromMap($map['SnapshotOutput']);
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
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }

        return $model;
    }
}
