<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsResponseBody\jobList\snapshotOutput;

class jobList extends Model
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
    public $jobName;
    /**
     * @var snapshotOutput
     */
    public $snapshotOutput;
    /**
     * @var string
     */
    public $status;
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
        'createTime'     => 'CreateTime',
        'jobId'          => 'JobId',
        'jobName'        => 'JobName',
        'snapshotOutput' => 'SnapshotOutput',
        'status'         => 'Status',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'timeInterval'   => 'TimeInterval',
    ];

    public function validate()
    {
        if (null !== $this->snapshotOutput) {
            $this->snapshotOutput->validate();
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

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->snapshotOutput) {
            $res['SnapshotOutput'] = null !== $this->snapshotOutput ? $this->snapshotOutput->toArray($noStream) : $this->snapshotOutput;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['SnapshotOutput'])) {
            $model->snapshotOutput = snapshotOutput::fromMap($map['SnapshotOutput']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
