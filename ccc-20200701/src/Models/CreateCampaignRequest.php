<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignRequest\caseList;

class CreateCampaignRequest extends Model
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
     * @var caseList[]
     */
    public $caseList;

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
    public $flashSmsParameters;

    /**
     * @var string
     */
    public $instGroupId;

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
     * @var string[]
     */
    public $numberList;

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
        'callableTime' => 'CallableTime',
        'caseFileKey' => 'CaseFileKey',
        'caseList' => 'CaseList',
        'contactFlowId' => 'ContactFlowId',
        'endTime' => 'EndTime',
        'executingUntilTimeout' => 'ExecutingUntilTimeout',
        'flashSmsParameters' => 'FlashSmsParameters',
        'instGroupId' => 'InstGroupId',
        'instanceId' => 'InstanceId',
        'maxAttemptCount' => 'MaxAttemptCount',
        'minAttemptInterval' => 'MinAttemptInterval',
        'name' => 'Name',
        'numberList' => 'NumberList',
        'queueId' => 'QueueId',
        'simulation' => 'Simulation',
        'simulationParameters' => 'SimulationParameters',
        'startTime' => 'StartTime',
        'strategyParameters' => 'StrategyParameters',
        'strategyType' => 'StrategyType',
    ];

    public function validate()
    {
        if (\is_array($this->caseList)) {
            Model::validateArray($this->caseList);
        }
        if (\is_array($this->numberList)) {
            Model::validateArray($this->numberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callableTime) {
            $res['CallableTime'] = $this->callableTime;
        }

        if (null !== $this->caseFileKey) {
            $res['CaseFileKey'] = $this->caseFileKey;
        }

        if (null !== $this->caseList) {
            if (\is_array($this->caseList)) {
                $res['CaseList'] = [];
                $n1 = 0;
                foreach ($this->caseList as $item1) {
                    $res['CaseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->flashSmsParameters) {
            $res['FlashSmsParameters'] = $this->flashSmsParameters;
        }

        if (null !== $this->instGroupId) {
            $res['InstGroupId'] = $this->instGroupId;
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

        if (null !== $this->numberList) {
            if (\is_array($this->numberList)) {
                $res['NumberList'] = [];
                $n1 = 0;
                foreach ($this->numberList as $item1) {
                    $res['NumberList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['CaseList'] as $item1) {
                    $model->caseList[$n1] = caseList::fromMap($item1);
                    ++$n1;
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

        if (isset($map['FlashSmsParameters'])) {
            $model->flashSmsParameters = $map['FlashSmsParameters'];
        }

        if (isset($map['InstGroupId'])) {
            $model->instGroupId = $map['InstGroupId'];
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

        if (isset($map['NumberList'])) {
            if (!empty($map['NumberList'])) {
                $model->numberList = [];
                $n1 = 0;
                foreach ($map['NumberList'] as $item1) {
                    $model->numberList[$n1] = $item1;
                    ++$n1;
                }
            }
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
