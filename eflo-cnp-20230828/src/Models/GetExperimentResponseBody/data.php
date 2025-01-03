<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\envParams;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\resource;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\results;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\task;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\workload;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-11-29 02:16:35
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 2024-11-29 02:26:35
     *
     * @var string
     */
    public $endTime;

    /**
     * @var envParams
     */
    public $envParams;

    /**
     * @example 1726882991828688898
     *
     * @var int
     */
    public $experimentId;

    /**
     * @example test
     *
     * @var string
     */
    public $experimentName;

    /**
     * @example AI
     *
     * @var string
     */
    public $experimentType;

    /**
     * @var string[]
     */
    public $getParams;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @example cifnews-guoyuan
     *
     * @var string
     */
    public $resourceName;

    /**
     * @var results
     */
    public $results;

    /**
     * @var string[]
     */
    public $setParams;

    /**
     * @example 2024-11-29 02:16:35
     *
     * @var string
     */
    public $startTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @var task
     */
    public $task;

    /**
     * @example 2024-11-29 02:16:35
     *
     * @var int
     */
    public $updateTime;

    /**
     * @var workload
     */
    public $workload;

    /**
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
        'resource'       => 'Resource',
        'resourceName'   => 'ResourceName',
        'results'        => 'Results',
        'setParams'      => 'SetParams',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'task'           => 'Task',
        'updateTime'     => 'UpdateTime',
        'workload'       => 'Workload',
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
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
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
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->workload) {
            $res['Workload'] = null !== $this->workload ? $this->workload->toMap() : null;
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
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
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
        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Workload'])) {
            $model->workload = workload::fromMap($map['Workload']);
        }
        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        return $model;
    }
}
