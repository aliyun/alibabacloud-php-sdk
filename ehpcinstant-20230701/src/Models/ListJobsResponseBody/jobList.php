<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsResponseBody;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsResponseBody\jobList\tags;
use AlibabaCloud\Tea\Model;

class jobList extends Model
{
    /**
     * @example 2024-01-25 12:29:21
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-01-25 12:35:23
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $executorCount;

    /**
     * @example Demo
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @example job-xxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example testJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 129**********
     *
     * @var string
     */
    public $ownerUid;

    /**
     * @example 2024-01-25 12:29:23
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $taskSustainable;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'endTime'         => 'EndTime',
        'executorCount'   => 'ExecutorCount',
        'jobDescription'  => 'JobDescription',
        'jobId'           => 'JobId',
        'jobName'         => 'JobName',
        'ownerUid'        => 'OwnerUid',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'taskCount'       => 'TaskCount',
        'taskSustainable' => 'TaskSustainable',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executorCount) {
            $res['ExecutorCount'] = $this->executorCount;
        }
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
        }
        if (null !== $this->taskSustainable) {
            $res['TaskSustainable'] = $this->taskSustainable;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecutorCount'])) {
            $model->executorCount = $map['ExecutorCount'];
        }
        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }
        if (isset($map['TaskSustainable'])) {
            $model->taskSustainable = $map['TaskSustainable'];
        }

        return $model;
    }
}
