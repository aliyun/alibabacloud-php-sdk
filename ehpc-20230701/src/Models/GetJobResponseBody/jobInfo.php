<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody;

use AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody\jobInfo\deploymentPolicy;
use AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody\jobInfo\tasks;
use AlibabaCloud\Tea\Model;

class jobInfo extends Model
{
    /**
     * @var deploymentPolicy
     */
    public $deploymentPolicy;

    /**
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
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'deploymentPolicy' => 'DeploymentPolicy',
        'jobDescription'   => 'JobDescription',
        'jobId'            => 'JobId',
        'jobName'          => 'JobName',
        'tasks'            => 'Tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentPolicy) {
            $res['DeploymentPolicy'] = null !== $this->deploymentPolicy ? $this->deploymentPolicy->toMap() : null;
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
        if (isset($map['DeploymentPolicy'])) {
            $model->deploymentPolicy = deploymentPolicy::fromMap($map['DeploymentPolicy']);
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
