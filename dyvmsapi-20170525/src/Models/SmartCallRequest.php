<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SmartCallRequest extends Model
{
    /**
     * @var bool
     */
    public $actionCodeBreak;

    /**
     * @var int
     */
    public $actionCodeTimeBreak;

    /**
     * @var string
     */
    public $asrBaseId;

    /**
     * @var string
     */
    public $asrModelId;

    /**
     * @var string
     */
    public $backgroundFileCode;

    /**
     * @var int
     */
    public $backgroundSpeed;

    /**
     * @var int
     */
    public $backgroundVolume;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $calledShowNumber;

    /**
     * @var string
     */
    public $dynamicId;

    /**
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @var bool
     */
    public $enableITN;

    /**
     * @var int
     */
    public $muteTime;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pauseTime;

    /**
     * @var bool
     */
    public $recordFlag;

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
     * @var int
     */
    public $speed;

    /**
     * @var int
     */
    public $streamAsr;

    /**
     * @var bool
     */
    public $ttsConf;

    /**
     * @var int
     */
    public $ttsSpeed;

    /**
     * @var string
     */
    public $ttsStyle;

    /**
     * @var int
     */
    public $ttsVolume;

    /**
     * @var string
     */
    public $voiceCode;

    /**
     * @var string
     */
    public $voiceCodeParam;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'actionCodeBreak'      => 'ActionCodeBreak',
        'actionCodeTimeBreak'  => 'ActionCodeTimeBreak',
        'asrBaseId'            => 'AsrBaseId',
        'asrModelId'           => 'AsrModelId',
        'backgroundFileCode'   => 'BackgroundFileCode',
        'backgroundSpeed'      => 'BackgroundSpeed',
        'backgroundVolume'     => 'BackgroundVolume',
        'calledNumber'         => 'CalledNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'dynamicId'            => 'DynamicId',
        'earlyMediaAsr'        => 'EarlyMediaAsr',
        'enableITN'            => 'EnableITN',
        'muteTime'             => 'MuteTime',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'pauseTime'            => 'PauseTime',
        'recordFlag'           => 'RecordFlag',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sessionTimeout'       => 'SessionTimeout',
        'speed'                => 'Speed',
        'streamAsr'            => 'StreamAsr',
        'ttsConf'              => 'TtsConf',
        'ttsSpeed'             => 'TtsSpeed',
        'ttsStyle'             => 'TtsStyle',
        'ttsVolume'            => 'TtsVolume',
        'voiceCode'            => 'VoiceCode',
        'voiceCodeParam'       => 'VoiceCodeParam',
        'volume'               => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCodeBreak) {
            $res['ActionCodeBreak'] = $this->actionCodeBreak;
        }
        if (null !== $this->actionCodeTimeBreak) {
            $res['ActionCodeTimeBreak'] = $this->actionCodeTimeBreak;
        }
        if (null !== $this->asrBaseId) {
            $res['AsrBaseId'] = $this->asrBaseId;
        }
        if (null !== $this->asrModelId) {
            $res['AsrModelId'] = $this->asrModelId;
        }
        if (null !== $this->backgroundFileCode) {
            $res['BackgroundFileCode'] = $this->backgroundFileCode;
        }
        if (null !== $this->backgroundSpeed) {
            $res['BackgroundSpeed'] = $this->backgroundSpeed;
        }
        if (null !== $this->backgroundVolume) {
            $res['BackgroundVolume'] = $this->backgroundVolume;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->dynamicId) {
            $res['DynamicId'] = $this->dynamicId;
        }
        if (null !== $this->earlyMediaAsr) {
            $res['EarlyMediaAsr'] = $this->earlyMediaAsr;
        }
        if (null !== $this->enableITN) {
            $res['EnableITN'] = $this->enableITN;
        }
        if (null !== $this->muteTime) {
            $res['MuteTime'] = $this->muteTime;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pauseTime) {
            $res['PauseTime'] = $this->pauseTime;
        }
        if (null !== $this->recordFlag) {
            $res['RecordFlag'] = $this->recordFlag;
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
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->streamAsr) {
            $res['StreamAsr'] = $this->streamAsr;
        }
        if (null !== $this->ttsConf) {
            $res['TtsConf'] = $this->ttsConf;
        }
        if (null !== $this->ttsSpeed) {
            $res['TtsSpeed'] = $this->ttsSpeed;
        }
        if (null !== $this->ttsStyle) {
            $res['TtsStyle'] = $this->ttsStyle;
        }
        if (null !== $this->ttsVolume) {
            $res['TtsVolume'] = $this->ttsVolume;
        }
        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }
        if (null !== $this->voiceCodeParam) {
            $res['VoiceCodeParam'] = $this->voiceCodeParam;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmartCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCodeBreak'])) {
            $model->actionCodeBreak = $map['ActionCodeBreak'];
        }
        if (isset($map['ActionCodeTimeBreak'])) {
            $model->actionCodeTimeBreak = $map['ActionCodeTimeBreak'];
        }
        if (isset($map['AsrBaseId'])) {
            $model->asrBaseId = $map['AsrBaseId'];
        }
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }
        if (isset($map['BackgroundFileCode'])) {
            $model->backgroundFileCode = $map['BackgroundFileCode'];
        }
        if (isset($map['BackgroundSpeed'])) {
            $model->backgroundSpeed = $map['BackgroundSpeed'];
        }
        if (isset($map['BackgroundVolume'])) {
            $model->backgroundVolume = $map['BackgroundVolume'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['DynamicId'])) {
            $model->dynamicId = $map['DynamicId'];
        }
        if (isset($map['EarlyMediaAsr'])) {
            $model->earlyMediaAsr = $map['EarlyMediaAsr'];
        }
        if (isset($map['EnableITN'])) {
            $model->enableITN = $map['EnableITN'];
        }
        if (isset($map['MuteTime'])) {
            $model->muteTime = $map['MuteTime'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PauseTime'])) {
            $model->pauseTime = $map['PauseTime'];
        }
        if (isset($map['RecordFlag'])) {
            $model->recordFlag = $map['RecordFlag'];
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
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['StreamAsr'])) {
            $model->streamAsr = $map['StreamAsr'];
        }
        if (isset($map['TtsConf'])) {
            $model->ttsConf = $map['TtsConf'];
        }
        if (isset($map['TtsSpeed'])) {
            $model->ttsSpeed = $map['TtsSpeed'];
        }
        if (isset($map['TtsStyle'])) {
            $model->ttsStyle = $map['TtsStyle'];
        }
        if (isset($map['TtsVolume'])) {
            $model->ttsVolume = $map['TtsVolume'];
        }
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }
        if (isset($map['VoiceCodeParam'])) {
            $model->voiceCodeParam = $map['VoiceCodeParam'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
