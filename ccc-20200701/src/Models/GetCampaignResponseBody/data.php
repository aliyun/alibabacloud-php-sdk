<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCampaignResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1634008800000
     *
     * @var int
     */
    public $actualEndTime;

    /**
     * @example 1634000460000
     *
     * @var int
     */
    public $actualStartTime;

    /**
     * @example 6badb397-a8b5-40b6-21019d382a09
     *
     * @var string
     */
    public $campaignId;

    /**
     * @example 0
     *
     * @var int
     */
    public $casesAborted;

    /**
     * @example 40
     *
     * @var int
     */
    public $casesConnected;

    /**
     * @example 0
     *
     * @var int
     */
    public $casesUncompleted;

    /**
     * @example 1
     *
     * @var int
     */
    public $casesUncompletedAfterAttempted;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxAttemptCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $minAttemptInterval;

    /**
     * @example test-campaign
     *
     * @var string
     */
    public $name;

    /**
     * @example 1634054400000
     *
     * @var int
     */
    public $planedEndTime;

    /**
     * @example 1633968000000
     *
     * @var int
     */
    public $planedStartTime;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $queueId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @example false
     *
     * @var bool
     */
    public $simulation;

    /**
     * @var string
     */
    public $simulationParameters;

    /**
     * @example Completed
     *
     * @var string
     */
    public $state;

    /**
     * @example {"ratio":1}
     *
     * @var string
     */
    public $strategyParameters;

    /**
     * @example PACING
     *
     * @var string
     */
    public $strategyType;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCases;
    protected $_name = [
        'actualEndTime'                  => 'ActualEndTime',
        'actualStartTime'                => 'ActualStartTime',
        'campaignId'                     => 'CampaignId',
        'casesAborted'                   => 'CasesAborted',
        'casesConnected'                 => 'CasesConnected',
        'casesUncompleted'               => 'CasesUncompleted',
        'casesUncompletedAfterAttempted' => 'CasesUncompletedAfterAttempted',
        'maxAttemptCount'                => 'MaxAttemptCount',
        'minAttemptInterval'             => 'MinAttemptInterval',
        'name'                           => 'Name',
        'planedEndTime'                  => 'PlanedEndTime',
        'planedStartTime'                => 'PlanedStartTime',
        'queueId'                        => 'QueueId',
        'queueName'                      => 'QueueName',
        'simulation'                     => 'Simulation',
        'simulationParameters'           => 'SimulationParameters',
        'state'                          => 'State',
        'strategyParameters'             => 'StrategyParameters',
        'strategyType'                   => 'StrategyType',
        'totalCases'                     => 'TotalCases',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualEndTime) {
            $res['ActualEndTime'] = $this->actualEndTime;
        }
        if (null !== $this->actualStartTime) {
            $res['ActualStartTime'] = $this->actualStartTime;
        }
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->casesAborted) {
            $res['CasesAborted'] = $this->casesAborted;
        }
        if (null !== $this->casesConnected) {
            $res['CasesConnected'] = $this->casesConnected;
        }
        if (null !== $this->casesUncompleted) {
            $res['CasesUncompleted'] = $this->casesUncompleted;
        }
        if (null !== $this->casesUncompletedAfterAttempted) {
            $res['CasesUncompletedAfterAttempted'] = $this->casesUncompletedAfterAttempted;
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
        if (null !== $this->planedEndTime) {
            $res['PlanedEndTime'] = $this->planedEndTime;
        }
        if (null !== $this->planedStartTime) {
            $res['PlanedStartTime'] = $this->planedStartTime;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->simulation) {
            $res['Simulation'] = $this->simulation;
        }
        if (null !== $this->simulationParameters) {
            $res['SimulationParameters'] = $this->simulationParameters;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->strategyParameters) {
            $res['StrategyParameters'] = $this->strategyParameters;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }
        if (null !== $this->totalCases) {
            $res['TotalCases'] = $this->totalCases;
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
        if (isset($map['ActualEndTime'])) {
            $model->actualEndTime = $map['ActualEndTime'];
        }
        if (isset($map['ActualStartTime'])) {
            $model->actualStartTime = $map['ActualStartTime'];
        }
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['CasesAborted'])) {
            $model->casesAborted = $map['CasesAborted'];
        }
        if (isset($map['CasesConnected'])) {
            $model->casesConnected = $map['CasesConnected'];
        }
        if (isset($map['CasesUncompleted'])) {
            $model->casesUncompleted = $map['CasesUncompleted'];
        }
        if (isset($map['CasesUncompletedAfterAttempted'])) {
            $model->casesUncompletedAfterAttempted = $map['CasesUncompletedAfterAttempted'];
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
        if (isset($map['PlanedEndTime'])) {
            $model->planedEndTime = $map['PlanedEndTime'];
        }
        if (isset($map['PlanedStartTime'])) {
            $model->planedStartTime = $map['PlanedStartTime'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['Simulation'])) {
            $model->simulation = $map['Simulation'];
        }
        if (isset($map['SimulationParameters'])) {
            $model->simulationParameters = $map['SimulationParameters'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StrategyParameters'])) {
            $model->strategyParameters = $map['StrategyParameters'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }
        if (isset($map['TotalCases'])) {
            $model->totalCases = $map['TotalCases'];
        }

        return $model;
    }
}
