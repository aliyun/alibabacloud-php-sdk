<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\arrayProperties;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;
use AlibabaCloud\Tea\Model;

class jobInfos extends Model
{
    /**
     * @description The properties of the array job.
     *
     * @var arrayProperties
     */
    public $arrayProperties;

    /**
     * @description The information of the container groups that are used to run the serverless job.
     *
     * @var containerGroups[]
     */
    public $containerGroups;

    /**
     * @description The time when the serverless job ended.
     *
     * @example 1662016121
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Indicates whether the job is an array job.
     *
     * @example false
     *
     * @var bool
     */
    public $isArrayJob;

    /**
     * @description The ID of the serverless job or the subtask (array job).
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
     * @description The time when the serverless job is last modified.
     *
     * @example 1663831441000
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description The scheduling priority of the serverless job.
     *
     * @example 9
     *
     * @var int
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
     * @description The time when the serverless job started.
     *
     * @example 1647427667
     *
     * @var int
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
     * @description The time when the serverless job is submitted.
     *
     * @example 1647423718
     *
     * @var int
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
        'arrayProperties' => 'ArrayProperties',
        'containerGroups' => 'ContainerGroups',
        'endTime'         => 'EndTime',
        'isArrayJob'      => 'IsArrayJob',
        'jobId'           => 'JobId',
        'jobName'         => 'JobName',
        'lastModifyTime'  => 'LastModifyTime',
        'priority'        => 'Priority',
        'queue'           => 'Queue',
        'startTime'       => 'StartTime',
        'state'           => 'State',
        'submitTime'      => 'SubmitTime',
        'user'            => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayProperties) {
            $res['ArrayProperties'] = null !== $this->arrayProperties ? $this->arrayProperties->toMap() : null;
        }
        if (null !== $this->containerGroups) {
            $res['ContainerGroups'] = [];
            if (null !== $this->containerGroups && \is_array($this->containerGroups)) {
                $n = 0;
                foreach ($this->containerGroups as $item) {
                    $res['ContainerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
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
     * @return jobInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayProperties'])) {
            $model->arrayProperties = arrayProperties::fromMap($map['ArrayProperties']);
        }
        if (isset($map['ContainerGroups'])) {
            if (!empty($map['ContainerGroups'])) {
                $model->containerGroups = [];
                $n                      = 0;
                foreach ($map['ContainerGroups'] as $item) {
                    $model->containerGroups[$n++] = null !== $item ? containerGroups::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
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
