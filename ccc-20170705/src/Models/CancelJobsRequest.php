<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CancelJobsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $jobId;

    /**
     * @var string[]
     */
    public $jobReferenceId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'all'            => 'All',
        'scenarioId'     => 'ScenarioId',
        'groupId'        => 'GroupId',
        'jobId'          => 'JobId',
        'jobReferenceId' => 'JobReferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobReferenceId) {
            $res['JobReferenceId'] = $this->jobReferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            if (!empty($map['JobId'])) {
                $model->jobId = $map['JobId'];
            }
        }
        if (isset($map['JobReferenceId'])) {
            if (!empty($map['JobReferenceId'])) {
                $model->jobReferenceId = $map['JobReferenceId'];
            }
        }

        return $model;
    }
}
