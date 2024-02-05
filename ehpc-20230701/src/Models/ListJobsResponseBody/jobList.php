<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobsResponseBody;

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
     * @example 1
     *
     * @var int
     */
    public $executorCount;

    /**
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
     * @example 129xxxx
     *
     * @var string
     */
    public $ownerUid;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskCount;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'executorCount'  => 'ExecutorCount',
        'jobDescription' => 'JobDescription',
        'jobId'          => 'JobId',
        'jobName'        => 'JobName',
        'ownerUid'       => 'OwnerUid',
        'status'         => 'Status',
        'taskCount'      => 'TaskCount',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        return $model;
    }
}
