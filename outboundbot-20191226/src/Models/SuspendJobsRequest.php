<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SuspendJobsRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 6b3ea2a1-32b3-4041-842b-9bde5de9dda0
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example 11994321-e6bc-47bb-8b1c-8eef8f2f768b
     *
     * @var string[]
     */
    public $jobId;

    /**
     * @example de3ab269-6746-477c-b13d-bd49f13202c2
     *
     * @var string[]
     */
    public $jobReferenceId;

    /**
     * @example 4b6dd926-3cc3-4111-a333-15d9b006fe81
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
     * @return SuspendJobsRequest
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
