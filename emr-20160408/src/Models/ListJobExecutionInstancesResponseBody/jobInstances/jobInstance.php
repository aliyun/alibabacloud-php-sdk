<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListJobExecutionInstancesResponseBody\jobInstances;

use AlibabaCloud\Tea\Model;

class jobInstance extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $retryInfo;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $runTime;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'    => 'Status',
        'startTime' => 'StartTime',
        'jobName'   => 'JobName',
        'retryInfo' => 'RetryInfo',
        'jobId'     => 'JobId',
        'runTime'   => 'RunTime',
        'jobType'   => 'JobType',
        'id'        => 'Id',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->retryInfo) {
            $res['RetryInfo'] = $this->retryInfo;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->runTime) {
            $res['RunTime'] = $this->runTime;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['RetryInfo'])) {
            $model->retryInfo = $map['RetryInfo'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RunTime'])) {
            $model->runTime = $map['RunTime'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
