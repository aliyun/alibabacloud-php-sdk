<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListServerlessJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The time at which the serverless job ended.
     *
     * @example 1682128871
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Indicates whether the job is an array job. Valid values:
     *
     *   True: yes
     *   False: no
     *
     * @example True
     *
     * @var bool
     */
    public $isArrayJob;

    /**
     * @description The ID of the serverless job or subtask (array job).
     *
     * @example 5
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the serverless job.
     *
     * @example testjob
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The scheduling priority of the serverless job. Valid values are 0 to 999. A greater value indicates a higher priority.
     *
     * @example 9
     *
     * @var string
     */
    public $priority;

    /**
     * @description The name of the queue in which the serverless job is run.
     *
     * @example comp
     *
     * @var string
     */
    public $queue;

    /**
     * @description The time at which the serverless job started.
     *
     * @example 1647427667
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the serverless job. Valid values:
     *
     *   Pending
     *   Initing
     *   Running
     *   Succeeded
     *   Canceled
     *   Failed
     *
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @description The time at which the serverless job is submitted.
     *
     * @example 1647423718
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The username that is used to run the serverless job.
     *
     * @example testuser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'endTime'    => 'EndTime',
        'isArrayJob' => 'IsArrayJob',
        'jobId'      => 'JobId',
        'jobName'    => 'JobName',
        'priority'   => 'Priority',
        'queue'      => 'Queue',
        'startTime'  => 'StartTime',
        'state'      => 'State',
        'submitTime' => 'SubmitTime',
        'user'       => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isArrayJob) {
            $res['IsArrayJob'] = $this->isArrayJob;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsArrayJob'])) {
            $model->isArrayJob = $map['IsArrayJob'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
