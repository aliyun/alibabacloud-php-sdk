<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudCreateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentGroup;

    /**
     * @var int
     */
    public $agentTimeout;

    /**
     * @var int
     */
    public $answerRate;

    /**
     * @var int
     */
    public $autoComplete;

    /**
     * @var int
     */
    public $autoDelete;

    /**
     * @var int
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
     * @var int
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
     * @var int
     */
    public $autoTaskType;

    /**
     * @var string
     */
    public $autoTriggerTimeStrategy;

    /**
     * @var int
     */
    public $callGroupType;

    /**
     * @var string
     */
    public $callLimitStrategy;

    /**
     * @var string
     */
    public $callPriorityStrategy;

    /**
     * @var int
     */
    public $callRouteStrategy;

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
    public $clidProperty;

    /**
     * @var string
     */
    public $cnos;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var int
     */
    public $customerClidType;

    /**
     * @var string
     */
    public $customerClidWeight;

    /**
     * @var int
     */
    public $customerClidWeightFlag;

    /**
     * @var string
     */
    public $customerClids;

    /**
     * @var int
     */
    public $customerClidsCategory;

    /**
     * @var string
     */
    public $customerClidsGroup;

    /**
     * @var string
     */
    public $customerMoh;

    /**
     * @var int
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
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $forceEndFlag;

    /**
     * @var int
     */
    public $isRewarm;

    /**
     * @var int
     */
    public $ivrId;

    /**
     * @var string
     */
    public $ivrName;

    /**
     * @var int
     */
    public $maxWaitTime;

    /**
     * @var int
     */
    public $minAvailableAgentCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $predictAdjust;

    /**
     * @var float
     */
    public $quotiety;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $retryStrategy;

    /**
     * @var int
     */
    public $retryStrategyOnlyToday;

    /**
     * @var int
     */
    public $retryStrategyTimeType;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $timeStrategy;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $userFields;

    /**
     * @var int
     */
    public $warmUpDuration;

    /**
     * @var int
     */
    public $wrapup;
    protected $_name = [
        'agentGroup' => 'AgentGroup',
        'agentTimeout' => 'AgentTimeout',
        'answerRate' => 'AnswerRate',
        'autoComplete' => 'AutoComplete',
        'autoDelete' => 'AutoDelete',
        'autoStart' => 'AutoStart',
        'autoStartDay' => 'AutoStartDay',
        'autoStartTime' => 'AutoStartTime',
        'autoStop' => 'AutoStop',
        'autoStopDay' => 'AutoStopDay',
        'autoStopTime' => 'AutoStopTime',
        'autoTaskType' => 'AutoTaskType',
        'autoTriggerTimeStrategy' => 'AutoTriggerTimeStrategy',
        'callGroupType' => 'CallGroupType',
        'callLimitStrategy' => 'CallLimitStrategy',
        'callPriorityStrategy' => 'CallPriorityStrategy',
        'callRouteStrategy' => 'CallRouteStrategy',
        'callStrategy' => 'CallStrategy',
        'callVariables' => 'CallVariables',
        'clidProperty' => 'ClidProperty',
        'cnos' => 'Cnos',
        'concurrency' => 'Concurrency',
        'customerClidType' => 'CustomerClidType',
        'customerClidWeight' => 'CustomerClidWeight',
        'customerClidWeightFlag' => 'CustomerClidWeightFlag',
        'customerClids' => 'CustomerClids',
        'customerClidsCategory' => 'CustomerClidsCategory',
        'customerClidsGroup' => 'CustomerClidsGroup',
        'customerMoh' => 'CustomerMoh',
        'customerTimeout' => 'CustomerTimeout',
        'customerVoice' => 'CustomerVoice',
        'description' => 'Description',
        'enterpriseId' => 'EnterpriseId',
        'forceEndFlag' => 'ForceEndFlag',
        'isRewarm' => 'IsRewarm',
        'ivrId' => 'IvrId',
        'ivrName' => 'IvrName',
        'maxWaitTime' => 'MaxWaitTime',
        'minAvailableAgentCount' => 'MinAvailableAgentCount',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'predictAdjust' => 'PredictAdjust',
        'quotiety' => 'Quotiety',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'retryStrategy' => 'RetryStrategy',
        'retryStrategyOnlyToday' => 'RetryStrategyOnlyToday',
        'retryStrategyTimeType' => 'RetryStrategyTimeType',
        'templateName' => 'TemplateName',
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
        if (null !== $this->agentGroup) {
            $res['AgentGroup'] = $this->agentGroup;
        }

        if (null !== $this->agentTimeout) {
            $res['AgentTimeout'] = $this->agentTimeout;
        }

        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }

        if (null !== $this->autoComplete) {
            $res['AutoComplete'] = $this->autoComplete;
        }

        if (null !== $this->autoDelete) {
            $res['AutoDelete'] = $this->autoDelete;
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

        if (null !== $this->callGroupType) {
            $res['CallGroupType'] = $this->callGroupType;
        }

        if (null !== $this->callLimitStrategy) {
            $res['CallLimitStrategy'] = $this->callLimitStrategy;
        }

        if (null !== $this->callPriorityStrategy) {
            $res['CallPriorityStrategy'] = $this->callPriorityStrategy;
        }

        if (null !== $this->callRouteStrategy) {
            $res['CallRouteStrategy'] = $this->callRouteStrategy;
        }

        if (null !== $this->callStrategy) {
            $res['CallStrategy'] = $this->callStrategy;
        }

        if (null !== $this->callVariables) {
            $res['CallVariables'] = $this->callVariables;
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

        if (null !== $this->customerClidsGroup) {
            $res['CustomerClidsGroup'] = $this->customerClidsGroup;
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

        if (null !== $this->isRewarm) {
            $res['IsRewarm'] = $this->isRewarm;
        }

        if (null !== $this->ivrId) {
            $res['IvrId'] = $this->ivrId;
        }

        if (null !== $this->ivrName) {
            $res['IvrName'] = $this->ivrName;
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

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->predictAdjust) {
            $res['PredictAdjust'] = $this->predictAdjust;
        }

        if (null !== $this->quotiety) {
            $res['Quotiety'] = $this->quotiety;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->retryStrategy) {
            $res['RetryStrategy'] = $this->retryStrategy;
        }

        if (null !== $this->retryStrategyOnlyToday) {
            $res['RetryStrategyOnlyToday'] = $this->retryStrategyOnlyToday;
        }

        if (null !== $this->retryStrategyTimeType) {
            $res['RetryStrategyTimeType'] = $this->retryStrategyTimeType;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['AgentGroup'])) {
            $model->agentGroup = $map['AgentGroup'];
        }

        if (isset($map['AgentTimeout'])) {
            $model->agentTimeout = $map['AgentTimeout'];
        }

        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }

        if (isset($map['AutoComplete'])) {
            $model->autoComplete = $map['AutoComplete'];
        }

        if (isset($map['AutoDelete'])) {
            $model->autoDelete = $map['AutoDelete'];
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

        if (isset($map['CallGroupType'])) {
            $model->callGroupType = $map['CallGroupType'];
        }

        if (isset($map['CallLimitStrategy'])) {
            $model->callLimitStrategy = $map['CallLimitStrategy'];
        }

        if (isset($map['CallPriorityStrategy'])) {
            $model->callPriorityStrategy = $map['CallPriorityStrategy'];
        }

        if (isset($map['CallRouteStrategy'])) {
            $model->callRouteStrategy = $map['CallRouteStrategy'];
        }

        if (isset($map['CallStrategy'])) {
            $model->callStrategy = $map['CallStrategy'];
        }

        if (isset($map['CallVariables'])) {
            $model->callVariables = $map['CallVariables'];
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

        if (isset($map['CustomerClidsGroup'])) {
            $model->customerClidsGroup = $map['CustomerClidsGroup'];
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

        if (isset($map['IsRewarm'])) {
            $model->isRewarm = $map['IsRewarm'];
        }

        if (isset($map['IvrId'])) {
            $model->ivrId = $map['IvrId'];
        }

        if (isset($map['IvrName'])) {
            $model->ivrName = $map['IvrName'];
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

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PredictAdjust'])) {
            $model->predictAdjust = $map['PredictAdjust'];
        }

        if (isset($map['Quotiety'])) {
            $model->quotiety = $map['Quotiety'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RetryStrategy'])) {
            $model->retryStrategy = $map['RetryStrategy'];
        }

        if (isset($map['RetryStrategyOnlyToday'])) {
            $model->retryStrategyOnlyToday = $map['RetryStrategyOnlyToday'];
        }

        if (isset($map['RetryStrategyTimeType'])) {
            $model->retryStrategyTimeType = $map['RetryStrategyTimeType'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
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
