<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentCallListResponseBody\model;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentExtension;

    /**
     * @var int
     */
    public $agentId;

    /**
     * @var int
     */
    public $agentSpeakingDuration;

    /**
     * @var string
     */
    public $agentSpeakingTime;

    /**
     * @var string
     */
    public $agentTag;

    /**
     * @var string
     */
    public $answerTime;

    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $callBeginTime;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $chatRecord;

    /**
     * @var string
     */
    public $hangupTime;

    /**
     * @var int
     */
    public $hangupType;

    /**
     * @var string
     */
    public $importTime;

    /**
     * @var string
     */
    public $individualTag;

    /**
     * @var string
     */
    public $intentDescription;

    /**
     * @var string
     */
    public $intentTag;

    /**
     * @var string
     */
    public $interceptReason;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $numberMD5;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $ringTime;

    /**
     * @var string
     */
    public $sms;

    /**
     * @var int
     */
    public $speakingDuration;

    /**
     * @var string
     */
    public $speakingTime;

    /**
     * @var string
     */
    public $speakingTurns;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusDescription;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $transferStatus;

    /**
     * @var int
     */
    public $transferStatusCode;

    /**
     * @var string
     */
    public $transferTime;
    protected $_name = [
        'agentExtension' => 'AgentExtension',
        'agentId' => 'AgentId',
        'agentSpeakingDuration' => 'AgentSpeakingDuration',
        'agentSpeakingTime' => 'AgentSpeakingTime',
        'agentTag' => 'AgentTag',
        'answerTime' => 'AnswerTime',
        'batchId' => 'BatchId',
        'callBeginTime' => 'CallBeginTime',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'chatRecord' => 'ChatRecord',
        'hangupTime' => 'HangupTime',
        'hangupType' => 'HangupType',
        'importTime' => 'ImportTime',
        'individualTag' => 'IndividualTag',
        'intentDescription' => 'IntentDescription',
        'intentTag' => 'IntentTag',
        'interceptReason' => 'InterceptReason',
        'keywords' => 'Keywords',
        'number' => 'Number',
        'numberMD5' => 'NumberMD5',
        'properties' => 'Properties',
        'remark' => 'Remark',
        'ringTime' => 'RingTime',
        'sms' => 'Sms',
        'speakingDuration' => 'SpeakingDuration',
        'speakingTime' => 'SpeakingTime',
        'speakingTurns' => 'SpeakingTurns',
        'statusCode' => 'StatusCode',
        'statusDescription' => 'StatusDescription',
        'tag' => 'Tag',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'transferStatus' => 'TransferStatus',
        'transferStatusCode' => 'TransferStatusCode',
        'transferTime' => 'TransferTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentExtension) {
            $res['AgentExtension'] = $this->agentExtension;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentSpeakingDuration) {
            $res['AgentSpeakingDuration'] = $this->agentSpeakingDuration;
        }

        if (null !== $this->agentSpeakingTime) {
            $res['AgentSpeakingTime'] = $this->agentSpeakingTime;
        }

        if (null !== $this->agentTag) {
            $res['AgentTag'] = $this->agentTag;
        }

        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
        }

        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->callBeginTime) {
            $res['CallBeginTime'] = $this->callBeginTime;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->chatRecord) {
            $res['ChatRecord'] = $this->chatRecord;
        }

        if (null !== $this->hangupTime) {
            $res['HangupTime'] = $this->hangupTime;
        }

        if (null !== $this->hangupType) {
            $res['HangupType'] = $this->hangupType;
        }

        if (null !== $this->importTime) {
            $res['ImportTime'] = $this->importTime;
        }

        if (null !== $this->individualTag) {
            $res['IndividualTag'] = $this->individualTag;
        }

        if (null !== $this->intentDescription) {
            $res['IntentDescription'] = $this->intentDescription;
        }

        if (null !== $this->intentTag) {
            $res['IntentTag'] = $this->intentTag;
        }

        if (null !== $this->interceptReason) {
            $res['InterceptReason'] = $this->interceptReason;
        }

        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->numberMD5) {
            $res['NumberMD5'] = $this->numberMD5;
        }

        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }

        if (null !== $this->sms) {
            $res['Sms'] = $this->sms;
        }

        if (null !== $this->speakingDuration) {
            $res['SpeakingDuration'] = $this->speakingDuration;
        }

        if (null !== $this->speakingTime) {
            $res['SpeakingTime'] = $this->speakingTime;
        }

        if (null !== $this->speakingTurns) {
            $res['SpeakingTurns'] = $this->speakingTurns;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->transferStatus) {
            $res['TransferStatus'] = $this->transferStatus;
        }

        if (null !== $this->transferStatusCode) {
            $res['TransferStatusCode'] = $this->transferStatusCode;
        }

        if (null !== $this->transferTime) {
            $res['TransferTime'] = $this->transferTime;
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
        if (isset($map['AgentExtension'])) {
            $model->agentExtension = $map['AgentExtension'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentSpeakingDuration'])) {
            $model->agentSpeakingDuration = $map['AgentSpeakingDuration'];
        }

        if (isset($map['AgentSpeakingTime'])) {
            $model->agentSpeakingTime = $map['AgentSpeakingTime'];
        }

        if (isset($map['AgentTag'])) {
            $model->agentTag = $map['AgentTag'];
        }

        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }

        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['CallBeginTime'])) {
            $model->callBeginTime = $map['CallBeginTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['ChatRecord'])) {
            $model->chatRecord = $map['ChatRecord'];
        }

        if (isset($map['HangupTime'])) {
            $model->hangupTime = $map['HangupTime'];
        }

        if (isset($map['HangupType'])) {
            $model->hangupType = $map['HangupType'];
        }

        if (isset($map['ImportTime'])) {
            $model->importTime = $map['ImportTime'];
        }

        if (isset($map['IndividualTag'])) {
            $model->individualTag = $map['IndividualTag'];
        }

        if (isset($map['IntentDescription'])) {
            $model->intentDescription = $map['IntentDescription'];
        }

        if (isset($map['IntentTag'])) {
            $model->intentTag = $map['IntentTag'];
        }

        if (isset($map['InterceptReason'])) {
            $model->interceptReason = $map['InterceptReason'];
        }

        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['NumberMD5'])) {
            $model->numberMD5 = $map['NumberMD5'];
        }

        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }

        if (isset($map['Sms'])) {
            $model->sms = $map['Sms'];
        }

        if (isset($map['SpeakingDuration'])) {
            $model->speakingDuration = $map['SpeakingDuration'];
        }

        if (isset($map['SpeakingTime'])) {
            $model->speakingTime = $map['SpeakingTime'];
        }

        if (isset($map['SpeakingTurns'])) {
            $model->speakingTurns = $map['SpeakingTurns'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TransferStatus'])) {
            $model->transferStatus = $map['TransferStatus'];
        }

        if (isset($map['TransferStatusCode'])) {
            $model->transferStatusCode = $map['TransferStatusCode'];
        }

        if (isset($map['TransferTime'])) {
            $model->transferTime = $map['TransferTime'];
        }

        return $model;
    }
}
