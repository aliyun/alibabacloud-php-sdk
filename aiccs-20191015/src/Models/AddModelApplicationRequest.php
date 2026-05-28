<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddModelApplicationRequest\ttsConfig;

class AddModelApplicationRequest extends Model
{
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
    public $callConnectedTriggerModel;

    /**
     * @var string
     */
    public $dyvmsSceneName;

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
        'applicationCps' => 'ApplicationCps',
        'applicationName' => 'ApplicationName',
        'callConnectedTriggerModel' => 'CallConnectedTriggerModel',
        'dyvmsSceneName' => 'DyvmsSceneName',
        'modelCode' => 'ModelCode',
        'modelVersion' => 'ModelVersion',
        'muteActive' => 'MuteActive',
        'muteDuration' => 'MuteDuration',
        'muteHangupNum' => 'MuteHangupNum',
        'ownerId' => 'OwnerId',
        'prompt' => 'Prompt',
        'qualificationId' => 'QualificationId',
        'qualificationName' => 'QualificationName',
        'recordingFile' => 'RecordingFile',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
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
        if (null !== $this->ttsConfig) {
            $this->ttsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCps) {
            $res['ApplicationCps'] = $this->applicationCps;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->callConnectedTriggerModel) {
            $res['CallConnectedTriggerModel'] = $this->callConnectedTriggerModel;
        }

        if (null !== $this->dyvmsSceneName) {
            $res['DyvmsSceneName'] = $this->dyvmsSceneName;
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
        if (isset($map['ApplicationCps'])) {
            $model->applicationCps = $map['ApplicationCps'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['CallConnectedTriggerModel'])) {
            $model->callConnectedTriggerModel = $map['CallConnectedTriggerModel'];
        }

        if (isset($map['DyvmsSceneName'])) {
            $model->dyvmsSceneName = $map['DyvmsSceneName'];
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
