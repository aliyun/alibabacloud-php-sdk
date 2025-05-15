<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\envParams;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentsResponseBody\data\results;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var envParams
     */
    public $envParams;

    /**
     * @var int
     */
    public $experimentId;

    /**
     * @var string
     */
    public $experimentName;

    /**
     * @var string
     */
    public $experimentType;

    /**
     * @var string[]
     */
    public $getParams;

    /**
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
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'envParams' => 'EnvParams',
        'experimentId' => 'ExperimentId',
        'experimentName' => 'ExperimentName',
        'experimentType' => 'ExperimentType',
        'getParams' => 'GetParams',
        'resourceName' => 'ResourceName',
        'results' => 'Results',
        'setParams' => 'SetParams',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'workloadName' => 'WorkloadName',
    ];

    public function validate()
    {
        if (null !== $this->envParams) {
            $this->envParams->validate();
        }
        if (\is_array($this->getParams)) {
            Model::validateArray($this->getParams);
        }
        if (null !== $this->results) {
            $this->results->validate();
        }
        if (\is_array($this->setParams)) {
            Model::validateArray($this->setParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->envParams) {
            $res['EnvParams'] = null !== $this->envParams ? $this->envParams->toArray($noStream) : $this->envParams;
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
            if (\is_array($this->getParams)) {
                $res['GetParams'] = [];
                foreach ($this->getParams as $key1 => $value1) {
                    $res['GetParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toArray($noStream) : $this->results;
        }

        if (null !== $this->setParams) {
            if (\is_array($this->setParams)) {
                $res['SetParams'] = [];
                foreach ($this->setParams as $key1 => $value1) {
                    $res['SetParams'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['GetParams'])) {
                $model->getParams = [];
                foreach ($map['GetParams'] as $key1 => $value1) {
                    $model->getParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        if (isset($map['SetParams'])) {
            if (!empty($map['SetParams'])) {
                $model->setParams = [];
                foreach ($map['SetParams'] as $key1 => $value1) {
                    $model->setParams[$key1] = $value1;
                }
            }
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
