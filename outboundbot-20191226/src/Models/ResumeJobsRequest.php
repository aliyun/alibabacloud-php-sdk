<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ResumeJobsRequest extends Model
{
    /**
     * @example true
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
     * @example de48407d-309e-451a-81ec-6fb11f8fdbf3
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example b72425bd-7871-4050-838e-033d80d754b7
     *
     * @var string[]
     */
    public $jobId;

    /**
     * @example d5971d98-7312-4f0e-a918-a17d67133e28
     *
     * @var string[]
     */
    public $jobReferenceId;

    /**
     * @example b016fbdb-b81c-4c06-8870-cb36b8783b6d
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
     * @return ResumeJobsRequest
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
