<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListJobExecutionInstancesResponseBody\jobInstances;

use AlibabaCloud\Tea\Model;

class jobInstance extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $id;

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
    public $jobType;

    /**
     * @var string
     */
    public $retryInfo;

    /**
     * @var int
     */
    public $runTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'id'        => 'Id',
        'jobId'     => 'JobId',
        'jobName'   => 'JobName',
        'jobType'   => 'JobType',
        'retryInfo' => 'RetryInfo',
        'runTime'   => 'RunTime',
        'startTime' => 'StartTime',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->retryInfo) {
            $res['RetryInfo'] = $this->retryInfo;
        }
        if (null !== $this->runTime) {
            $res['RunTime'] = $this->runTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['RetryInfo'])) {
            $model->retryInfo = $map['RetryInfo'];
        }
        if (isset($map['RunTime'])) {
            $model->runTime = $map['RunTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
