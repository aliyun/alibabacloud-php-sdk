<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignRequest\caseList;
use AlibabaCloud\Tea\Model;

class CreateCampaignRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [{"beginTime":"00:00:00","endTime":"23:00:00" }]
     *
     * @var string
     */
    public $callableTime;

    /**
     * @example ccc-test/namelist.csv
     *
     * @var string
     */
    public $caseFileKey;

    /**
     * @var caseList[]
     */
    public $caseList;

    /**
     * @description This parameter is required.
     *
     * @example c1f2bc75-422e-43c7-9c9d9d95633a
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @description This parameter is required.
     *
     * @example 1634313600000
     *
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $executingUntilTimeout;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $maxAttemptCount;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $minAttemptInterval;

    /**
     * @description This parameter is required.
     *
     * @example test-campaign
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example skillgroup@ccc-test
     *
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
     * @description This parameter is required.
     *
     * @example 1634140800000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example {"ratio":1}
     *
     * @var string
     */
    public $strategyParameters;

    /**
     * @description This parameter is required.
     *
     * @example PACING
     *
     * @var string
     */
    public $strategyType;
    protected $_name = [
        'callableTime'          => 'CallableTime',
        'caseFileKey'           => 'CaseFileKey',
        'caseList'              => 'CaseList',
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
        if (null !== $this->caseList) {
            $res['CaseList'] = [];
            if (null !== $this->caseList && \is_array($this->caseList)) {
                $n = 0;
                foreach ($this->caseList as $item) {
                    $res['CaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateCampaignRequest
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
            if (!empty($map['CaseList'])) {
                $model->caseList = [];
                $n               = 0;
                foreach ($map['CaseList'] as $item) {
                    $model->caseList[$n++] = null !== $item ? caseList::fromMap($item) : $item;
                }
            }
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
