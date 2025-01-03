<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\envParams;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\results;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Creation time
     *
     * @example 2024-10-22 10:18:10
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Task end time
     *
     * @example 2024-10-22 10:28:10
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Environment parameters in operation
     *
     * @var envParams
     */
    public $envParams;

    /**
     * @description Experiment ID
     *
     * @example 1684537476910997506
     *
     * @var int
     */
    public $experimentId;

    /**
     * @description Experiment name
     *
     * @example test
     *
     * @var string
     */
    public $experimentName;

    /**
     * @description Experiment type
     *
     * @example AI
     *
     * @var string
     */
    public $experimentType;

    /**
     * @description Parsed load parameters
     *
     * @var string[]
     */
    public $getParams;

    /**
     * @description Resource name
     *
     * @example ecs.r8y.4xlarge
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description Task results
     *
     * @var results
     */
    public $results;

    /**
     * @description Load parameters in operation
     *
     * @var string[]
     */
    public $setParams;

    /**
     * @description Task start time
     *
     * @example 2024-10-22 10:18:10
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Status
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description Update time
     *
     * @example 2024-10-22 10:18:10
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description Workload name
     *
     * @example test
     *
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'endTime'        => 'EndTime',
        'envParams'      => 'EnvParams',
        'experimentId'   => 'ExperimentId',
        'experimentName' => 'ExperimentName',
        'experimentType' => 'ExperimentType',
        'getParams'      => 'GetParams',
        'resourceName'   => 'ResourceName',
        'results'        => 'Results',
        'setParams'      => 'SetParams',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
        'workloadName'   => 'WorkloadName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->envParams) {
            $res['EnvParams'] = null !== $this->envParams ? $this->envParams->toMap() : null;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->experimentName) {
            $res['ExperimentName'] = $this->experimentName;
        }
        if (null !== $this->experimentType) {
            $res['ExperimentType'] = $this->experimentType;
        }
        if (null !== $this->getParams) {
            $res['GetParams'] = $this->getParams;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }
        if (null !== $this->setParams) {
            $res['SetParams'] = $this->setParams;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnvParams'])) {
            $model->envParams = envParams::fromMap($map['EnvParams']);
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['ExperimentName'])) {
            $model->experimentName = $map['ExperimentName'];
        }
        if (isset($map['ExperimentType'])) {
            $model->experimentType = $map['ExperimentType'];
        }
        if (isset($map['GetParams'])) {
            $model->getParams = $map['GetParams'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }
        if (isset($map['SetParams'])) {
            $model->setParams = $map['SetParams'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        return $model;
    }
}
