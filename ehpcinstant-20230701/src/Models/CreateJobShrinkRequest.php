<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class CreateJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dependencyPolicyShrink;

    /**
     * @var string
     */
    public $deploymentPolicyShrink;

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
     * @var string
     */
    public $securityPolicyShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $tasksShrink;
    protected $_name = [
        'dependencyPolicyShrink' => 'DependencyPolicy',
        'deploymentPolicyShrink' => 'DeploymentPolicy',
        'jobDescription' => 'JobDescription',
        'jobName' => 'JobName',
        'jobScheduler' => 'JobScheduler',
        'securityPolicyShrink' => 'SecurityPolicy',
        'tasksShrink' => 'Tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependencyPolicyShrink) {
            $res['DependencyPolicy'] = $this->dependencyPolicyShrink;
        }
        if (null !== $this->deploymentPolicyShrink) {
            $res['DeploymentPolicy'] = $this->deploymentPolicyShrink;
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
        if (null !== $this->securityPolicyShrink) {
            $res['SecurityPolicy'] = $this->securityPolicyShrink;
        }
        if (null !== $this->tasksShrink) {
            $res['Tasks'] = $this->tasksShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependencyPolicy'])) {
            $model->dependencyPolicyShrink = $map['DependencyPolicy'];
        }
        if (isset($map['DeploymentPolicy'])) {
            $model->deploymentPolicyShrink = $map['DeploymentPolicy'];
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
            $model->securityPolicyShrink = $map['SecurityPolicy'];
        }
        if (isset($map['Tasks'])) {
            $model->tasksShrink = $map['Tasks'];
        }

        return $model;
    }
}
