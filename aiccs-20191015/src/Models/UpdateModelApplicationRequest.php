<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationRequest\interruptConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationRequest\ttsConfig;

class UpdateModelApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var int
     */
    public $applicationCps;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var bool
     */
    public $callAssistantHangup;

    /**
     * @var bool
     */
    public $callAssistantRecognize;

    /**
     * @var bool
     */
    public $callConnectedTriggerModel;

    /**
     * @var string
     */
    public $dtmfAllowedDigits;

    /**
     * @var bool
     */
    public $dtmfAutoValidateEnable;

    /**
     * @var int
     */
    public $dtmfDigitCount;

    /**
     * @var int
     */
    public $dtmfInputTimeout;

    /**
     * @var string
     */
    public $dtmfOutOfRangeAction;

    /**
     * @var int
     */
    public $dtmfRetryPlayTimes;

    /**
     * @var string
     */
    public $dtmfRetryPromptText;

    /**
     * @var int
     */
    public $dtmfSendMaxCount;

    /**
     * @var int
     */
    public $dtmfSendWaitTimeout;

    /**
     * @var string
     */
    public $dyvmsSceneName;

    /**
     * @var bool
     */
    public $enableDtmfReceive;

    /**
     * @var bool
     */
    public $enableDtmfSend;

    /**
     * @var bool
     */
    public $enableMorse;

    /**
     * @var interruptConfig
     */
    public $interruptConfig;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var bool
     */
    public $muteActive;

    /**
     * @var int
     */
    public $muteDuration;

    /**
     * @var int
     */
    public $muteHangupNum;

    /**
     * @var string
     */
    public $mutePushMode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $qualificationName;

    /**
     * @var string
     */
    public $recordingFile;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $speechContent;

    /**
     * @var int
     */
    public $speechId;

    /**
     * @var string
     */
    public $startWord;

    /**
     * @var int
     */
    public $startWordType;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @var string
     */
    public $usageDesc;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'applicationCps' => 'ApplicationCps',
        'applicationName' => 'ApplicationName',
        'callAssistantHangup' => 'CallAssistantHangup',
        'callAssistantRecognize' => 'CallAssistantRecognize',
        'callConnectedTriggerModel' => 'CallConnectedTriggerModel',
        'dtmfAllowedDigits' => 'DtmfAllowedDigits',
        'dtmfAutoValidateEnable' => 'DtmfAutoValidateEnable',
        'dtmfDigitCount' => 'DtmfDigitCount',
        'dtmfInputTimeout' => 'DtmfInputTimeout',
        'dtmfOutOfRangeAction' => 'DtmfOutOfRangeAction',
        'dtmfRetryPlayTimes' => 'DtmfRetryPlayTimes',
        'dtmfRetryPromptText' => 'DtmfRetryPromptText',
        'dtmfSendMaxCount' => 'DtmfSendMaxCount',
        'dtmfSendWaitTimeout' => 'DtmfSendWaitTimeout',
        'dyvmsSceneName' => 'DyvmsSceneName',
        'enableDtmfReceive' => 'EnableDtmfReceive',
        'enableDtmfSend' => 'EnableDtmfSend',
        'enableMorse' => 'EnableMorse',
        'interruptConfig' => 'InterruptConfig',
        'modelCode' => 'ModelCode',
        'modelVersion' => 'ModelVersion',
        'muteActive' => 'MuteActive',
        'muteDuration' => 'MuteDuration',
        'muteHangupNum' => 'MuteHangupNum',
        'mutePushMode' => 'MutePushMode',
        'ownerId' => 'OwnerId',
        'prompt' => 'Prompt',
        'qualificationId' => 'QualificationId',
        'qualificationName' => 'QualificationName',
        'recordingFile' => 'RecordingFile',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sessionTimeout' => 'SessionTimeout',
        'source' => 'Source',
        'speechContent' => 'SpeechContent',
        'speechId' => 'SpeechId',
        'startWord' => 'StartWord',
        'startWordType' => 'StartWordType',
        'ttsConfig' => 'TtsConfig',
        'usageDesc' => 'UsageDesc',
    ];

    public function validate()
    {
        if (null !== $this->interruptConfig) {
            $this->interruptConfig->validate();
        }
        if (null !== $this->ttsConfig) {
            $this->ttsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->applicationCps) {
            $res['ApplicationCps'] = $this->applicationCps;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->callAssistantHangup) {
            $res['CallAssistantHangup'] = $this->callAssistantHangup;
        }

        if (null !== $this->callAssistantRecognize) {
            $res['CallAssistantRecognize'] = $this->callAssistantRecognize;
        }

        if (null !== $this->callConnectedTriggerModel) {
            $res['CallConnectedTriggerModel'] = $this->callConnectedTriggerModel;
        }

        if (null !== $this->dtmfAllowedDigits) {
            $res['DtmfAllowedDigits'] = $this->dtmfAllowedDigits;
        }

        if (null !== $this->dtmfAutoValidateEnable) {
            $res['DtmfAutoValidateEnable'] = $this->dtmfAutoValidateEnable;
        }

        if (null !== $this->dtmfDigitCount) {
            $res['DtmfDigitCount'] = $this->dtmfDigitCount;
        }

        if (null !== $this->dtmfInputTimeout) {
            $res['DtmfInputTimeout'] = $this->dtmfInputTimeout;
        }

        if (null !== $this->dtmfOutOfRangeAction) {
            $res['DtmfOutOfRangeAction'] = $this->dtmfOutOfRangeAction;
        }

        if (null !== $this->dtmfRetryPlayTimes) {
            $res['DtmfRetryPlayTimes'] = $this->dtmfRetryPlayTimes;
        }

        if (null !== $this->dtmfRetryPromptText) {
            $res['DtmfRetryPromptText'] = $this->dtmfRetryPromptText;
        }

        if (null !== $this->dtmfSendMaxCount) {
            $res['DtmfSendMaxCount'] = $this->dtmfSendMaxCount;
        }

        if (null !== $this->dtmfSendWaitTimeout) {
            $res['DtmfSendWaitTimeout'] = $this->dtmfSendWaitTimeout;
        }

        if (null !== $this->dyvmsSceneName) {
            $res['DyvmsSceneName'] = $this->dyvmsSceneName;
        }

        if (null !== $this->enableDtmfReceive) {
            $res['EnableDtmfReceive'] = $this->enableDtmfReceive;
        }

        if (null !== $this->enableDtmfSend) {
            $res['EnableDtmfSend'] = $this->enableDtmfSend;
        }

        if (null !== $this->enableMorse) {
            $res['EnableMorse'] = $this->enableMorse;
        }

        if (null !== $this->interruptConfig) {
            $res['InterruptConfig'] = null !== $this->interruptConfig ? $this->interruptConfig->toArray($noStream) : $this->interruptConfig;
        }

        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }

        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        if (null !== $this->muteActive) {
            $res['MuteActive'] = $this->muteActive;
        }

        if (null !== $this->muteDuration) {
            $res['MuteDuration'] = $this->muteDuration;
        }

        if (null !== $this->muteHangupNum) {
            $res['MuteHangupNum'] = $this->muteHangupNum;
        }

        if (null !== $this->mutePushMode) {
            $res['MutePushMode'] = $this->mutePushMode;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }

        if (null !== $this->qualificationName) {
            $res['QualificationName'] = $this->qualificationName;
        }

        if (null !== $this->recordingFile) {
            $res['RecordingFile'] = $this->recordingFile;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->speechContent) {
            $res['SpeechContent'] = $this->speechContent;
        }

        if (null !== $this->speechId) {
            $res['SpeechId'] = $this->speechId;
        }

        if (null !== $this->startWord) {
            $res['StartWord'] = $this->startWord;
        }

        if (null !== $this->startWordType) {
            $res['StartWordType'] = $this->startWordType;
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = null !== $this->ttsConfig ? $this->ttsConfig->toArray($noStream) : $this->ttsConfig;
        }

        if (null !== $this->usageDesc) {
            $res['UsageDesc'] = $this->usageDesc;
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
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['ApplicationCps'])) {
            $model->applicationCps = $map['ApplicationCps'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['CallAssistantHangup'])) {
            $model->callAssistantHangup = $map['CallAssistantHangup'];
        }

        if (isset($map['CallAssistantRecognize'])) {
            $model->callAssistantRecognize = $map['CallAssistantRecognize'];
        }

        if (isset($map['CallConnectedTriggerModel'])) {
            $model->callConnectedTriggerModel = $map['CallConnectedTriggerModel'];
        }

        if (isset($map['DtmfAllowedDigits'])) {
            $model->dtmfAllowedDigits = $map['DtmfAllowedDigits'];
        }

        if (isset($map['DtmfAutoValidateEnable'])) {
            $model->dtmfAutoValidateEnable = $map['DtmfAutoValidateEnable'];
        }

        if (isset($map['DtmfDigitCount'])) {
            $model->dtmfDigitCount = $map['DtmfDigitCount'];
        }

        if (isset($map['DtmfInputTimeout'])) {
            $model->dtmfInputTimeout = $map['DtmfInputTimeout'];
        }

        if (isset($map['DtmfOutOfRangeAction'])) {
            $model->dtmfOutOfRangeAction = $map['DtmfOutOfRangeAction'];
        }

        if (isset($map['DtmfRetryPlayTimes'])) {
            $model->dtmfRetryPlayTimes = $map['DtmfRetryPlayTimes'];
        }

        if (isset($map['DtmfRetryPromptText'])) {
            $model->dtmfRetryPromptText = $map['DtmfRetryPromptText'];
        }

        if (isset($map['DtmfSendMaxCount'])) {
            $model->dtmfSendMaxCount = $map['DtmfSendMaxCount'];
        }

        if (isset($map['DtmfSendWaitTimeout'])) {
            $model->dtmfSendWaitTimeout = $map['DtmfSendWaitTimeout'];
        }

        if (isset($map['DyvmsSceneName'])) {
            $model->dyvmsSceneName = $map['DyvmsSceneName'];
        }

        if (isset($map['EnableDtmfReceive'])) {
            $model->enableDtmfReceive = $map['EnableDtmfReceive'];
        }

        if (isset($map['EnableDtmfSend'])) {
            $model->enableDtmfSend = $map['EnableDtmfSend'];
        }

        if (isset($map['EnableMorse'])) {
            $model->enableMorse = $map['EnableMorse'];
        }

        if (isset($map['InterruptConfig'])) {
            $model->interruptConfig = interruptConfig::fromMap($map['InterruptConfig']);
        }

        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }

        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        if (isset($map['MuteActive'])) {
            $model->muteActive = $map['MuteActive'];
        }

        if (isset($map['MuteDuration'])) {
            $model->muteDuration = $map['MuteDuration'];
        }

        if (isset($map['MuteHangupNum'])) {
            $model->muteHangupNum = $map['MuteHangupNum'];
        }

        if (isset($map['MutePushMode'])) {
            $model->mutePushMode = $map['MutePushMode'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }

        if (isset($map['QualificationName'])) {
            $model->qualificationName = $map['QualificationName'];
        }

        if (isset($map['RecordingFile'])) {
            $model->recordingFile = $map['RecordingFile'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SpeechContent'])) {
            $model->speechContent = $map['SpeechContent'];
        }

        if (isset($map['SpeechId'])) {
            $model->speechId = $map['SpeechId'];
        }

        if (isset($map['StartWord'])) {
            $model->startWord = $map['StartWord'];
        }

        if (isset($map['StartWordType'])) {
            $model->startWordType = $map['StartWordType'];
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = ttsConfig::fromMap($map['TtsConfig']);
        }

        if (isset($map['UsageDesc'])) {
            $model->usageDesc = $map['UsageDesc'];
        }

        return $model;
    }
}
