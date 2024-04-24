<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class CreateJobShrinkRequest extends Model
{
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
     * @example testjob
     *
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $tasksShrink;
    protected $_name = [
        'deploymentPolicyShrink' => 'DeploymentPolicy',
        'jobDescription'         => 'JobDescription',
        'jobName'                => 'JobName',
        'tasksShrink'            => 'Tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentPolicyShrink) {
            $res['DeploymentPolicy'] = $this->deploymentPolicyShrink;
        }
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
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
        if (isset($map['DeploymentPolicy'])) {
            $model->deploymentPolicyShrink = $map['DeploymentPolicy'];
        }
        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Tasks'])) {
            $model->tasksShrink = $map['Tasks'];
        }

        return $model;
    }
}
