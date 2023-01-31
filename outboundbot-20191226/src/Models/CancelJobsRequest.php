<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CancelJobsRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 9f84892d-721a-4069-9975-668c8164d64e
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example edf45790-7200-4cbc-b157-8c0a5f400b75
     *
     * @var string[]
     */
    public $jobId;

    /**
     * @example 4a875676-b136-4087-88b4-de67c61fed69
     *
     * @var string[]
     */
    public $jobReferenceId;

    /**
     * @example 9cef0dd3-b9d6-4748-9a6f-77a8c3402bb1
     *
     * @var string
     */
    public $scenarioId;
    protected $_name = [
        'all'            => 'All',
        'instanceId'     => 'InstanceId',
        'jobGroupId'     => 'JobGroupId',
        'jobId'          => 'JobId',
        'jobReferenceId' => 'JobReferenceId',
        'scenarioId'     => 'ScenarioId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobReferenceId) {
            $res['JobReferenceId'] = $this->jobReferenceId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
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
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
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
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }

        return $model;
    }
}
