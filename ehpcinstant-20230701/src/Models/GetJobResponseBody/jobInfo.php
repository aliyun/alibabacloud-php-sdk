<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\deploymentPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks;
use AlibabaCloud\Tea\Model;

class jobInfo extends Model
{
    /**
     * @example 2024-03-05 20:00:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @var deploymentPolicy
     */
    public $deploymentPolicy;

    /**
     * @example 2024-03-05 20:01:48
     *
     * @var string
     */
    public $endTime;

    /**
     * @example Demo
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @example job-xxxx
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
     * @example 2024-03-05 20:00:48
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Succeed
     *
     * @var string
     */
    public $status;

    /**
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'deploymentPolicy' => 'DeploymentPolicy',
        'endTime'          => 'EndTime',
        'jobDescription'   => 'JobDescription',
        'jobId'            => 'JobId',
        'jobName'          => 'JobName',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'tasks'            => 'Tasks',
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
        if (null !== $this->deploymentPolicy) {
            $res['DeploymentPolicy'] = null !== $this->deploymentPolicy ? $this->deploymentPolicy->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeploymentPolicy'])) {
            $model->deploymentPolicy = deploymentPolicy::fromMap($map['DeploymentPolicy']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
