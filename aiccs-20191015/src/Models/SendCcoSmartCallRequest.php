<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class SendCcoSmartCallRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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
    public $prodCode;

    /**
     * @var string
     */
    public $calledShowNumber;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $voiceCode;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $playTimes;

    /**
     * @var int
     */
    public $volume;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var string
     */
    public $asrModelId;

    /**
     * @var string
     */
    public $asrBaseId;

    /**
     * @var string
     */
    public $asrAlsAmId;

    /**
     * @var string
     */
    public $asrVocabularyId;

    /**
     * @var bool
     */
    public $recordFlag;

    /**
     * @var int
     */
    public $pauseTime;

    /**
     * @var int
     */
    public $muteTime;

    /**
     * @var bool
     */
    public $actionCodeBreak;

    /**
     * @var string
     */
    public $dynamicId;

    /**
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @var string
     */
    public $voiceCodeParam;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var int
     */
    public $actionCodeTimeBreak;

    /**
     * @var bool
     */
    public $ttsConf;

    /**
     * @var string
     */
    public $ttsStyle;

    /**
     * @var int
     */
    public $ttsVolume;

    /**
     * @var int
     */
    public $ttsSpeed;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'prodCode'             => 'ProdCode',
        'calledShowNumber'     => 'CalledShowNumber',
        'calledNumber'         => 'CalledNumber',
        'voiceCode'            => 'VoiceCode',
        'outId'                => 'OutId',
        'playTimes'            => 'PlayTimes',
        'volume'               => 'Volume',
        'speed'                => 'Speed',
        'asrModelId'           => 'AsrModelId',
        'asrBaseId'            => 'AsrBaseId',
        'asrAlsAmId'           => 'AsrAlsAmId',
        'asrVocabularyId'      => 'AsrVocabularyId',
        'recordFlag'           => 'RecordFlag',
        'pauseTime'            => 'PauseTime',
        'muteTime'             => 'MuteTime',
        'actionCodeBreak'      => 'ActionCodeBreak',
        'dynamicId'            => 'DynamicId',
        'earlyMediaAsr'        => 'EarlyMediaAsr',
        'voiceCodeParam'       => 'VoiceCodeParam',
        'sessionTimeout'       => 'SessionTimeout',
        'actionCodeTimeBreak'  => 'ActionCodeTimeBreak',
        'ttsConf'              => 'TtsConf',
        'ttsStyle'             => 'TtsStyle',
        'ttsVolume'            => 'TtsVolume',
        'ttsSpeed'             => 'TtsSpeed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->playTimes) {
            $res['PlayTimes'] = $this->playTimes;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->asrModelId) {
            $res['AsrModelId'] = $this->asrModelId;
        }
        if (null !== $this->asrBaseId) {
            $res['AsrBaseId'] = $this->asrBaseId;
        }
        if (null !== $this->asrAlsAmId) {
            $res['AsrAlsAmId'] = $this->asrAlsAmId;
        }
        if (null !== $this->asrVocabularyId) {
            $res['AsrVocabularyId'] = $this->asrVocabularyId;
        }
        if (null !== $this->recordFlag) {
            $res['RecordFlag'] = $this->recordFlag;
        }
        if (null !== $this->pauseTime) {
            $res['PauseTime'] = $this->pauseTime;
        }
        if (null !== $this->muteTime) {
            $res['MuteTime'] = $this->muteTime;
        }
        if (null !== $this->actionCodeBreak) {
            $res['ActionCodeBreak'] = $this->actionCodeBreak;
        }
        if (null !== $this->dynamicId) {
            $res['DynamicId'] = $this->dynamicId;
        }
        if (null !== $this->earlyMediaAsr) {
            $res['EarlyMediaAsr'] = $this->earlyMediaAsr;
        }
        if (null !== $this->voiceCodeParam) {
            $res['VoiceCodeParam'] = $this->voiceCodeParam;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }
        if (null !== $this->actionCodeTimeBreak) {
            $res['ActionCodeTimeBreak'] = $this->actionCodeTimeBreak;
        }
        if (null !== $this->ttsConf) {
            $res['TtsConf'] = $this->ttsConf;
        }
        if (null !== $this->ttsStyle) {
            $res['TtsStyle'] = $this->ttsStyle;
        }
        if (null !== $this->ttsVolume) {
            $res['TtsVolume'] = $this->ttsVolume;
        }
        if (null !== $this->ttsSpeed) {
            $res['TtsSpeed'] = $this->ttsSpeed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCcoSmartCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PlayTimes'])) {
            $model->playTimes = $map['PlayTimes'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }
        if (isset($map['AsrBaseId'])) {
            $model->asrBaseId = $map['AsrBaseId'];
        }
        if (isset($map['AsrAlsAmId'])) {
            $model->asrAlsAmId = $map['AsrAlsAmId'];
        }
        if (isset($map['AsrVocabularyId'])) {
            $model->asrVocabularyId = $map['AsrVocabularyId'];
        }
        if (isset($map['RecordFlag'])) {
            $model->recordFlag = $map['RecordFlag'];
        }
        if (isset($map['PauseTime'])) {
            $model->pauseTime = $map['PauseTime'];
        }
        if (isset($map['MuteTime'])) {
            $model->muteTime = $map['MuteTime'];
        }
        if (isset($map['ActionCodeBreak'])) {
            $model->actionCodeBreak = $map['ActionCodeBreak'];
        }
        if (isset($map['DynamicId'])) {
            $model->dynamicId = $map['DynamicId'];
        }
        if (isset($map['EarlyMediaAsr'])) {
            $model->earlyMediaAsr = $map['EarlyMediaAsr'];
        }
        if (isset($map['VoiceCodeParam'])) {
            $model->voiceCodeParam = $map['VoiceCodeParam'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }
        if (isset($map['ActionCodeTimeBreak'])) {
            $model->actionCodeTimeBreak = $map['ActionCodeTimeBreak'];
        }
        if (isset($map['TtsConf'])) {
            $model->ttsConf = $map['TtsConf'];
        }
        if (isset($map['TtsStyle'])) {
            $model->ttsStyle = $map['TtsStyle'];
        }
        if (isset($map['TtsVolume'])) {
            $model->ttsVolume = $map['TtsVolume'];
        }
        if (isset($map['TtsSpeed'])) {
            $model->ttsSpeed = $map['TtsSpeed'];
        }

        return $model;
    }
}
