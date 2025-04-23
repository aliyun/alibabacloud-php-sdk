<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListServerlessJobsResponseBody;

use AlibabaCloud\Dara\Model;

class jobs extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $isArrayJob;

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
    public $priority;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'endTime' => 'EndTime',
        'isArrayJob' => 'IsArrayJob',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'priority' => 'Priority',
        'queue' => 'Queue',
        'startTime' => 'StartTime',
        'state' => 'State',
        'submitTime' => 'SubmitTime',
        'user' => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
