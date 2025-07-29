<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\dependencyPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\deploymentPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\securityPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks;
use AlibabaCloud\Tea\Model;

class CreateJobRequest extends Model
{
    /**
     * @var dependencyPolicy
     */
    public $dependencyPolicy;

    /**
     * @var deploymentPolicy
     */
    public $deploymentPolicy;

    /**
     * @example Demo
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @description This parameter is required.
     *
     * @example testjob
     *
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
     * @description This parameter is required.
     *
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'dependencyPolicy' => 'DependencyPolicy',
        'deploymentPolicy' => 'DeploymentPolicy',
        'jobDescription' => 'JobDescription',
        'jobName' => 'JobName',
        'jobScheduler' => 'JobScheduler',
        'securityPolicy' => 'SecurityPolicy',
        'tasks' => 'Tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependencyPolicy) {
            $res['DependencyPolicy'] = null !== $this->dependencyPolicy ? $this->dependencyPolicy->toMap() : null;
        }
        if (null !== $this->deploymentPolicy) {
            $res['DeploymentPolicy'] = null !== $this->deploymentPolicy ? $this->deploymentPolicy->toMap() : null;
        }
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobScheduler) {
            $res['JobScheduler'] = $this->jobScheduler;
        }
        if (null !== $this->securityPolicy) {
            $res['SecurityPolicy'] = null !== $this->securityPolicy ? $this->securityPolicy->toMap() : null;
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
     * @return CreateJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependencyPolicy'])) {
            $model->dependencyPolicy = dependencyPolicy::fromMap($map['DependencyPolicy']);
        }
        if (isset($map['DeploymentPolicy'])) {
            $model->deploymentPolicy = deploymentPolicy::fromMap($map['DeploymentPolicy']);
        }
        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
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
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
