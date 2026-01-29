<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\dependencyPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\deploymentPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\securityPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks;

class jobInfo extends Model
{
    /**
     * @var string
     */
    public $appExtraInfo;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dependencyPolicy
     */
    public $dependencyPolicy;

    /**
     * @var deploymentPolicy
     */
    public $deploymentPolicy;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $jobDescription;

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
    public $jobScheduler;

    /**
     * @var securityPolicy
     */
    public $securityPolicy;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'appExtraInfo' => 'AppExtraInfo',
        'createTime' => 'CreateTime',
        'dependencyPolicy' => 'DependencyPolicy',
        'deploymentPolicy' => 'DeploymentPolicy',
        'endTime' => 'EndTime',
        'jobDescription' => 'JobDescription',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'jobScheduler' => 'JobScheduler',
        'securityPolicy' => 'SecurityPolicy',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tasks' => 'Tasks',
    ];

    public function validate()
    {
        if (null !== $this->dependencyPolicy) {
            $this->dependencyPolicy->validate();
        }
        if (null !== $this->deploymentPolicy) {
            $this->deploymentPolicy->validate();
        }
        if (null !== $this->securityPolicy) {
            $this->securityPolicy->validate();
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appExtraInfo) {
            $res['AppExtraInfo'] = $this->appExtraInfo;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dependencyPolicy) {
            $res['DependencyPolicy'] = null !== $this->dependencyPolicy ? $this->dependencyPolicy->toArray($noStream) : $this->dependencyPolicy;
        }

        if (null !== $this->deploymentPolicy) {
            $res['DeploymentPolicy'] = null !== $this->deploymentPolicy ? $this->deploymentPolicy->toArray($noStream) : $this->deploymentPolicy;
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

        if (null !== $this->jobScheduler) {
            $res['JobScheduler'] = $this->jobScheduler;
        }

        if (null !== $this->securityPolicy) {
            $res['SecurityPolicy'] = null !== $this->securityPolicy ? $this->securityPolicy->toArray($noStream) : $this->securityPolicy;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['Tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['Tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppExtraInfo'])) {
            $model->appExtraInfo = $map['AppExtraInfo'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DependencyPolicy'])) {
            $model->dependencyPolicy = dependencyPolicy::fromMap($map['DependencyPolicy']);
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

        if (isset($map['JobScheduler'])) {
            $model->jobScheduler = $map['JobScheduler'];
        }

        if (isset($map['SecurityPolicy'])) {
            $model->securityPolicy = securityPolicy::fromMap($map['SecurityPolicy']);
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
                $n1 = 0;
                foreach ($map['Tasks'] as $item1) {
                    $model->tasks[$n1] = tasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
