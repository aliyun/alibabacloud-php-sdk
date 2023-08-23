<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CreateCampaignShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callableTime;

    /**
     * @var string
     */
    public $caseFileKey;

    /**
     * @var string
     */
    public $caseListShrink;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $executingUntilTimeout;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxAttemptCount;

    /**
     * @var int
     */
    public $minAttemptInterval;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $queueId;

    /**
     * @var bool
     */
    public $simulation;

    /**
     * @var string
     */
    public $simulationParameters;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $strategyParameters;

    /**
     * @var string
     */
    public $strategyType;
    protected $_name = [
        'callableTime'          => 'CallableTime',
        'caseFileKey'           => 'CaseFileKey',
        'caseListShrink'        => 'CaseList',
        'contactFlowId'         => 'ContactFlowId',
        'endTime'               => 'EndTime',
        'executingUntilTimeout' => 'ExecutingUntilTimeout',
        'instanceId'            => 'InstanceId',
        'maxAttemptCount'       => 'MaxAttemptCount',
        'minAttemptInterval'    => 'MinAttemptInterval',
        'name'                  => 'Name',
        'queueId'               => 'QueueId',
        'simulation'            => 'Simulation',
        'simulationParameters'  => 'SimulationParameters',
        'startTime'             => 'StartTime',
        'strategyParameters'    => 'StrategyParameters',
        'strategyType'          => 'StrategyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callableTime) {
            $res['CallableTime'] = $this->callableTime;
        }
        if (null !== $this->caseFileKey) {
            $res['CaseFileKey'] = $this->caseFileKey;
        }
        if (null !== $this->caseListShrink) {
            $res['CaseList'] = $this->caseListShrink;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executingUntilTimeout) {
            $res['ExecutingUntilTimeout'] = $this->executingUntilTimeout;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxAttemptCount) {
            $res['MaxAttemptCount'] = $this->maxAttemptCount;
        }
        if (null !== $this->minAttemptInterval) {
            $res['MinAttemptInterval'] = $this->minAttemptInterval;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->simulation) {
            $res['Simulation'] = $this->simulation;
        }
        if (null !== $this->simulationParameters) {
            $res['SimulationParameters'] = $this->simulationParameters;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->strategyParameters) {
            $res['StrategyParameters'] = $this->strategyParameters;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCampaignShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallableTime'])) {
            $model->callableTime = $map['CallableTime'];
        }
        if (isset($map['CaseFileKey'])) {
            $model->caseFileKey = $map['CaseFileKey'];
        }
        if (isset($map['CaseList'])) {
            $model->caseListShrink = $map['CaseList'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecutingUntilTimeout'])) {
            $model->executingUntilTimeout = $map['ExecutingUntilTimeout'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxAttemptCount'])) {
            $model->maxAttemptCount = $map['MaxAttemptCount'];
        }
        if (isset($map['MinAttemptInterval'])) {
            $model->minAttemptInterval = $map['MinAttemptInterval'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['Simulation'])) {
            $model->simulation = $map['Simulation'];
        }
        if (isset($map['SimulationParameters'])) {
            $model->simulationParameters = $map['SimulationParameters'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StrategyParameters'])) {
            $model->strategyParameters = $map['StrategyParameters'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }

        return $model;
    }
}
