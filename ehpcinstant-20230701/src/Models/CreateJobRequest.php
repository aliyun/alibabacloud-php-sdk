<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\dependencyPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\deploymentPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\securityPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks;

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
     * @var string
     */
    public $jobDescription;

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
        if (null !== $this->dependencyPolicy) {
            $res['DependencyPolicy'] = null !== $this->dependencyPolicy ? $this->dependencyPolicy->toArray($noStream) : $this->dependencyPolicy;
        }

        if (null !== $this->deploymentPolicy) {
            $res['DeploymentPolicy'] = null !== $this->deploymentPolicy ? $this->deploymentPolicy->toArray($noStream) : $this->deploymentPolicy;
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
            $res['SecurityPolicy'] = null !== $this->securityPolicy ? $this->securityPolicy->toArray($noStream) : $this->securityPolicy;
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
