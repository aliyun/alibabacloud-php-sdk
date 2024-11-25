<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsResponseBody\jobList\snapshotOutput;
use AlibabaCloud\Tea\Model;

class jobList extends Model
{
    /**
     * @description The time when the template was created.
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
     * @description The name of the job.
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The output information.
     *
     * @var snapshotOutput
     */
    public $snapshotOutput;

    /**
     * @description The state of the job.
     *
     * Valid values:
     *
     *   init: The job is not started.
     *   paused: The job is paused.
     *   started: The job is in progress.
     *
     * @example started
     *
     * @var string
     */
    public $status;

    /**
     * @description The template ID.
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
     * @description The interval between two adjacent snapshots. Unit: seconds.
     *
     * @example 5
     *
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
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->snapshotOutput) {
            $res['SnapshotOutput'] = null !== $this->snapshotOutput ? $this->snapshotOutput->toMap() : null;
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
