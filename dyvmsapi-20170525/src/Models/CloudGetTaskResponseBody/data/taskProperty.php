<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskProperty extends Model
{
    /**
     * @var string
     */
    public $adjustStep;

    /**
     * @var string
     */
    public $agentTimeout;

    /**
     * @var string
     */
    public $agentUtilization;

    /**
     * @var string
     */
    public $answerRate;

    /**
     * @var string
     */
    public $autoComplete;

    /**
     * @var string
     */
    public $autoStart;

    /**
     * @var string
     */
    public $autoStartDay;

    /**
     * @var string
     */
    public $autoStartTime;

    /**
     * @var string
     */
    public $autoStop;

    /**
     * @var string
     */
    public $autoStopDay;

    /**
     * @var string
     */
    public $autoStopTime;

    /**
     * @var string
     */
    public $autoTaskType;

    /**
     * @var string
     */
    public $autoTriggerTimeStrategy;

    /**
     * @var string
     */
    public $callLimitStrategy;

    /**
     * @var string
     */
    public $callStrategy;

    /**
     * @var string
     */
    public $callVariables;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $clidGroup;

    /**
     * @var string
     */
    public $clidProperty;

    /**
     * @var string
     */
    public $cnos;

    /**
     * @var string
     */
    public $concurrency;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $curlRetryTimes;

    /**
     * @var string
     */
    public $customerClidType;

    /**
     * @var string
     */
    public $customerClidWeight;

    /**
     * @var string
     */
    public $customerClidWeightFlag;

    /**
     * @var string
     */
    public $customerClids;

    /**
     * @var string
     */
    public $customerClidsCategory;

    /**
     * @var string
     */
    public $customerMoh;

    /**
     * @var string
     */
    public $customerTimeout;

    /**
     * @var string
     */
    public $customerVoice;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $forceEndFlag;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $isRandom;

    /**
     * @var string
     */
    public $isRewarm;

    /**
     * @var string
     */
    public $ivrId;

    /**
     * @var string
     */
    public $maxWaitTime;

    /**
     * @var string
     */
    public $minAvailableAgentCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $overCallLimitCnos;

    /**
     * @var string
     */
    public $overTime;

    /**
     * @var string
     */
    public $pauseDuration;

    /**
     * @var string
     */
    public $pauseTime;

    /**
     * @var string
     */
    public $predictAdjust;

    /**
     * @var string
     */
    public $quotiety;

    /**
     * @var string
     */
    public $retryStrategy;

    /**
     * @var string
     */
    public $retryStrategyOnlyToday;

    /**
     * @var string
     */
    public $standbyCnos;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDescription;

    /**
     * @var string
     */
    public $taskFields;

    /**
     * @var string
     */
    public $timeStrategy;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userFields;

    /**
     * @var string
     */
    public $warmUpDuration;

    /**
     * @var string
     */
    public $wrapup;
    protected $_name = [
        'adjustStep' => 'AdjustStep',
        'agentTimeout' => 'AgentTimeout',
        'agentUtilization' => 'AgentUtilization',
        'answerRate' => 'AnswerRate',
        'autoComplete' => 'AutoComplete',
        'autoStart' => 'AutoStart',
        'autoStartDay' => 'AutoStartDay',
        'autoStartTime' => 'AutoStartTime',
        'autoStop' => 'AutoStop',
        'autoStopDay' => 'AutoStopDay',
        'autoStopTime' => 'AutoStopTime',
        'autoTaskType' => 'AutoTaskType',
        'autoTriggerTimeStrategy' => 'AutoTriggerTimeStrategy',
        'callLimitStrategy' => 'CallLimitStrategy',
        'callStrategy' => 'CallStrategy',
        'callVariables' => 'CallVariables',
        'callbackUrl' => 'CallbackUrl',
        'clidGroup' => 'ClidGroup',
        'clidProperty' => 'ClidProperty',
        'cnos' => 'Cnos',
        'concurrency' => 'Concurrency',
        'createTime' => 'CreateTime',
        'curlRetryTimes' => 'CurlRetryTimes',
        'customerClidType' => 'CustomerClidType',
        'customerClidWeight' => 'CustomerClidWeight',
        'customerClidWeightFlag' => 'CustomerClidWeightFlag',
        'customerClids' => 'CustomerClids',
        'customerClidsCategory' => 'CustomerClidsCategory',
        'customerMoh' => 'CustomerMoh',
        'customerTimeout' => 'CustomerTimeout',
        'customerVoice' => 'CustomerVoice',
        'description' => 'Description',
        'enterpriseId' => 'EnterpriseId',
        'forceEndFlag' => 'ForceEndFlag',
        'id' => 'Id',
        'isRandom' => 'IsRandom',
        'isRewarm' => 'IsRewarm',
        'ivrId' => 'IvrId',
        'maxWaitTime' => 'MaxWaitTime',
        'minAvailableAgentCount' => 'MinAvailableAgentCount',
        'name' => 'Name',
        'overCallLimitCnos' => 'OverCallLimitCnos',
        'overTime' => 'OverTime',
        'pauseDuration' => 'PauseDuration',
        'pauseTime' => 'PauseTime',
        'predictAdjust' => 'PredictAdjust',
        'quotiety' => 'Quotiety',
        'retryStrategy' => 'RetryStrategy',
        'retryStrategyOnlyToday' => 'RetryStrategyOnlyToday',
        'standbyCnos' => 'StandbyCnos',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusDescription' => 'StatusDescription',
        'taskFields' => 'TaskFields',
        'timeStrategy' => 'TimeStrategy',
        'type' => 'Type',
        'userFields' => 'UserFields',
        'warmUpDuration' => 'WarmUpDuration',
        'wrapup' => 'Wrapup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustStep) {
            $res['AdjustStep'] = $this->adjustStep;
        }

        if (null !== $this->agentTimeout) {
            $res['AgentTimeout'] = $this->agentTimeout;
        }

        if (null !== $this->agentUtilization) {
            $res['AgentUtilization'] = $this->agentUtilization;
        }

        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }

        if (null !== $this->autoComplete) {
            $res['AutoComplete'] = $this->autoComplete;
        }

        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }

        if (null !== $this->autoStartDay) {
            $res['AutoStartDay'] = $this->autoStartDay;
        }

        if (null !== $this->autoStartTime) {
            $res['AutoStartTime'] = $this->autoStartTime;
        }

        if (null !== $this->autoStop) {
            $res['AutoStop'] = $this->autoStop;
        }

        if (null !== $this->autoStopDay) {
            $res['AutoStopDay'] = $this->autoStopDay;
        }

        if (null !== $this->autoStopTime) {
            $res['AutoStopTime'] = $this->autoStopTime;
        }

        if (null !== $this->autoTaskType) {
            $res['AutoTaskType'] = $this->autoTaskType;
        }

        if (null !== $this->autoTriggerTimeStrategy) {
            $res['AutoTriggerTimeStrategy'] = $this->autoTriggerTimeStrategy;
        }

        if (null !== $this->callLimitStrategy) {
            $res['CallLimitStrategy'] = $this->callLimitStrategy;
        }

        if (null !== $this->callStrategy) {
            $res['CallStrategy'] = $this->callStrategy;
        }

        if (null !== $this->callVariables) {
            $res['CallVariables'] = $this->callVariables;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->clidGroup) {
            $res['ClidGroup'] = $this->clidGroup;
        }

        if (null !== $this->clidProperty) {
            $res['ClidProperty'] = $this->clidProperty;
        }

        if (null !== $this->cnos) {
            $res['Cnos'] = $this->cnos;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->curlRetryTimes) {
            $res['CurlRetryTimes'] = $this->curlRetryTimes;
        }

        if (null !== $this->customerClidType) {
            $res['CustomerClidType'] = $this->customerClidType;
        }

        if (null !== $this->customerClidWeight) {
            $res['CustomerClidWeight'] = $this->customerClidWeight;
        }

        if (null !== $this->customerClidWeightFlag) {
            $res['CustomerClidWeightFlag'] = $this->customerClidWeightFlag;
        }

        if (null !== $this->customerClids) {
            $res['CustomerClids'] = $this->customerClids;
        }

        if (null !== $this->customerClidsCategory) {
            $res['CustomerClidsCategory'] = $this->customerClidsCategory;
        }

        if (null !== $this->customerMoh) {
            $res['CustomerMoh'] = $this->customerMoh;
        }

        if (null !== $this->customerTimeout) {
            $res['CustomerTimeout'] = $this->customerTimeout;
        }

        if (null !== $this->customerVoice) {
            $res['CustomerVoice'] = $this->customerVoice;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->forceEndFlag) {
            $res['ForceEndFlag'] = $this->forceEndFlag;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isRandom) {
            $res['IsRandom'] = $this->isRandom;
        }

        if (null !== $this->isRewarm) {
            $res['IsRewarm'] = $this->isRewarm;
        }

        if (null !== $this->ivrId) {
            $res['IvrId'] = $this->ivrId;
        }

        if (null !== $this->maxWaitTime) {
            $res['MaxWaitTime'] = $this->maxWaitTime;
        }

        if (null !== $this->minAvailableAgentCount) {
            $res['MinAvailableAgentCount'] = $this->minAvailableAgentCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->overCallLimitCnos) {
            $res['OverCallLimitCnos'] = $this->overCallLimitCnos;
        }

        if (null !== $this->overTime) {
            $res['OverTime'] = $this->overTime;
        }

        if (null !== $this->pauseDuration) {
            $res['PauseDuration'] = $this->pauseDuration;
        }

        if (null !== $this->pauseTime) {
            $res['PauseTime'] = $this->pauseTime;
        }

        if (null !== $this->predictAdjust) {
            $res['PredictAdjust'] = $this->predictAdjust;
        }

        if (null !== $this->quotiety) {
            $res['Quotiety'] = $this->quotiety;
        }

        if (null !== $this->retryStrategy) {
            $res['RetryStrategy'] = $this->retryStrategy;
        }

        if (null !== $this->retryStrategyOnlyToday) {
            $res['RetryStrategyOnlyToday'] = $this->retryStrategyOnlyToday;
        }

        if (null !== $this->standbyCnos) {
            $res['StandbyCnos'] = $this->standbyCnos;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }

        if (null !== $this->taskFields) {
            $res['TaskFields'] = $this->taskFields;
        }

        if (null !== $this->timeStrategy) {
            $res['TimeStrategy'] = $this->timeStrategy;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userFields) {
            $res['UserFields'] = $this->userFields;
        }

        if (null !== $this->warmUpDuration) {
            $res['WarmUpDuration'] = $this->warmUpDuration;
        }

        if (null !== $this->wrapup) {
            $res['Wrapup'] = $this->wrapup;
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
        if (isset($map['AdjustStep'])) {
            $model->adjustStep = $map['AdjustStep'];
        }

        if (isset($map['AgentTimeout'])) {
            $model->agentTimeout = $map['AgentTimeout'];
        }

        if (isset($map['AgentUtilization'])) {
            $model->agentUtilization = $map['AgentUtilization'];
        }

        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }

        if (isset($map['AutoComplete'])) {
            $model->autoComplete = $map['AutoComplete'];
        }

        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }

        if (isset($map['AutoStartDay'])) {
            $model->autoStartDay = $map['AutoStartDay'];
        }

        if (isset($map['AutoStartTime'])) {
            $model->autoStartTime = $map['AutoStartTime'];
        }

        if (isset($map['AutoStop'])) {
            $model->autoStop = $map['AutoStop'];
        }

        if (isset($map['AutoStopDay'])) {
            $model->autoStopDay = $map['AutoStopDay'];
        }

        if (isset($map['AutoStopTime'])) {
            $model->autoStopTime = $map['AutoStopTime'];
        }

        if (isset($map['AutoTaskType'])) {
            $model->autoTaskType = $map['AutoTaskType'];
        }

        if (isset($map['AutoTriggerTimeStrategy'])) {
            $model->autoTriggerTimeStrategy = $map['AutoTriggerTimeStrategy'];
        }

        if (isset($map['CallLimitStrategy'])) {
            $model->callLimitStrategy = $map['CallLimitStrategy'];
        }

        if (isset($map['CallStrategy'])) {
            $model->callStrategy = $map['CallStrategy'];
        }

        if (isset($map['CallVariables'])) {
            $model->callVariables = $map['CallVariables'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['ClidGroup'])) {
            $model->clidGroup = $map['ClidGroup'];
        }

        if (isset($map['ClidProperty'])) {
            $model->clidProperty = $map['ClidProperty'];
        }

        if (isset($map['Cnos'])) {
            $model->cnos = $map['Cnos'];
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CurlRetryTimes'])) {
            $model->curlRetryTimes = $map['CurlRetryTimes'];
        }

        if (isset($map['CustomerClidType'])) {
            $model->customerClidType = $map['CustomerClidType'];
        }

        if (isset($map['CustomerClidWeight'])) {
            $model->customerClidWeight = $map['CustomerClidWeight'];
        }

        if (isset($map['CustomerClidWeightFlag'])) {
            $model->customerClidWeightFlag = $map['CustomerClidWeightFlag'];
        }

        if (isset($map['CustomerClids'])) {
            $model->customerClids = $map['CustomerClids'];
        }

        if (isset($map['CustomerClidsCategory'])) {
            $model->customerClidsCategory = $map['CustomerClidsCategory'];
        }

        if (isset($map['CustomerMoh'])) {
            $model->customerMoh = $map['CustomerMoh'];
        }

        if (isset($map['CustomerTimeout'])) {
            $model->customerTimeout = $map['CustomerTimeout'];
        }

        if (isset($map['CustomerVoice'])) {
            $model->customerVoice = $map['CustomerVoice'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['ForceEndFlag'])) {
            $model->forceEndFlag = $map['ForceEndFlag'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsRandom'])) {
            $model->isRandom = $map['IsRandom'];
        }

        if (isset($map['IsRewarm'])) {
            $model->isRewarm = $map['IsRewarm'];
        }

        if (isset($map['IvrId'])) {
            $model->ivrId = $map['IvrId'];
        }

        if (isset($map['MaxWaitTime'])) {
            $model->maxWaitTime = $map['MaxWaitTime'];
        }

        if (isset($map['MinAvailableAgentCount'])) {
            $model->minAvailableAgentCount = $map['MinAvailableAgentCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OverCallLimitCnos'])) {
            $model->overCallLimitCnos = $map['OverCallLimitCnos'];
        }

        if (isset($map['OverTime'])) {
            $model->overTime = $map['OverTime'];
        }

        if (isset($map['PauseDuration'])) {
            $model->pauseDuration = $map['PauseDuration'];
        }

        if (isset($map['PauseTime'])) {
            $model->pauseTime = $map['PauseTime'];
        }

        if (isset($map['PredictAdjust'])) {
            $model->predictAdjust = $map['PredictAdjust'];
        }

        if (isset($map['Quotiety'])) {
            $model->quotiety = $map['Quotiety'];
        }

        if (isset($map['RetryStrategy'])) {
            $model->retryStrategy = $map['RetryStrategy'];
        }

        if (isset($map['RetryStrategyOnlyToday'])) {
            $model->retryStrategyOnlyToday = $map['RetryStrategyOnlyToday'];
        }

        if (isset($map['StandbyCnos'])) {
            $model->standbyCnos = $map['StandbyCnos'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }

        if (isset($map['TaskFields'])) {
            $model->taskFields = $map['TaskFields'];
        }

        if (isset($map['TimeStrategy'])) {
            $model->timeStrategy = $map['TimeStrategy'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserFields'])) {
            $model->userFields = $map['UserFields'];
        }

        if (isset($map['WarmUpDuration'])) {
            $model->warmUpDuration = $map['WarmUpDuration'];
        }

        if (isset($map['Wrapup'])) {
            $model->wrapup = $map['Wrapup'];
        }

        return $model;
    }
}
