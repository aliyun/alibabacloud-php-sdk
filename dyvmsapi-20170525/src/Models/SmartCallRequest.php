<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SmartCallRequest extends Model
{
    /**
     * @description Specifies whether the playback of the recording file can be interrupted. Default value: **true**. The default value indicates that the playback of the recording file can be interrupted.
     *
     * > The value of action_code_break takes precedence over the value of action_break.
     * @example true
     *
     * @var bool
     */
    public $actionCodeBreak;

    /**
     * @description The duration that the user keeps speaking. The playback of the recording file is interrupted when this duration is reached. Unit: milliseconds.
     *
     * If the value of ActionCodeBreak is set to **true** for the recording file and the duration that the user keeps speaking reaches the specified duration, the playback of the recording file is interrupted. If you do not specify ActionCodeTimeBreak or set the value of ActionCodeTimeBreak to 0, the setting of ActionCodeBreak does not take effect.
     * @example 120
     *
     * @var int
     */
    public $actionCodeTimeBreak;

    /**
     * @description The ASR base model. Valid values:
     *
     *   **customer_service\_8k** (default): Chinese Mandarin.
     *   **dialect_customer_service\_8k**: a heavy accent.
     *
     * > You must specify the ASR model when you call the SmartCall operation. We recommend that you specify either of the AsrModelId and AsrBaseId parameters.
     *
     *   If you specify only the AsrModelId parameter, the specified ASR model is used.
     *
     *   If you specify only the AsrBaseId parameter, the ASR base model is used.
     *
     *   If you specify neither of the two parameters, the default ASR base model is used, that is, the default value customer_service\_8k is used for the AsrBaseId parameter.
     *
     *   If you specify both parameters, make sure that their values do not conflict with each other.
     *
     * @example customer_service_8k
     *
     * @var string
     */
    public $asrBaseId;

    /**
     * @description The ID of the Automatic Speech Recognition (ASR) model.
     *
     * You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home) and view the ID of the ASR model on the **ASR Model Management** page.
     *
     * > You must specify the ASR model when you call the SmartCall operation. We recommend that you specify either of the AsrModelId and AsrBaseId parameters.
     *
     *   If you specify only the AsrModelId parameter, the specified ASR model is used.
     *
     *   If you specify only the AsrBaseId parameter, the specified ASR base model is used.
     *
     *   If you specify neither of the two parameters, the default value customer_service\_8k is used for the AsrBaseId parameter. This means that the default Mandarin ASR base model is used.
     *
     *   If you specify both parameters, make sure that their values do not conflict with each other.
     *
     * @example 2070aca1eff146f9a7bc826f1c3d****
     *
     * @var string
     */
    public $asrModelId;

    /**
     * @description The ID of the background voice file that is played back when the user talks with the robot.
     *
     * You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice File Management**, click the **Intelligent Speech Interaction Recording File** tab, and then click **Details** in the Actions column to view the voice ID.
     * @example 2d4c-4e78-8d2a-afbb06cf****.wav
     *
     * @var string
     */
    public $backgroundFileCode;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var int
     */
    public $backgroundSpeed;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var int
     */
    public $backgroundVolume;

    /**
     * @description The called number. Only phone numbers in the Chinese mainland are supported.
     *
     * @example 1590****0000
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description The number displayed to the called party. The value must be the number you purchased.
     *
     * You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home) and choose **Voice Numbers** > **Real Number Management** to view the number you purchased.
     * @example 0571****5678
     *
     * @var string
     */
    public $calledShowNumber;

    /**
     * @description The dynamic extension ID that is reserved for the caller of the operation. This ID is returned in the callback URL and is used as the development identifier of the customer.
     *
     * @example abcdefgh
     *
     * @var string
     */
    public $dynamicId;

    /**
     * @description Specifies whether to enable speech recognition of early media. Valid values:
     *
     *   **false** (default): Speech recognition of early media is disabled.
     *   **true**: Speech recognition of early media is enabled.
     *
     * > If you set the value of this parameter to **true**, the reason why the call is not answered is recorded.
     * @example true
     *
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @description Specifies whether to enable Inverse Text Normalization (ITN) during post-processing. Default value: **false**. If you set the value to false, ITN is not enabled during post-processing.
     *
     * If you set the value to **true**, Chinese numerals are converted into Arabic numerals for output.
     * @example false
     *
     * @var bool
     */
    public $enableITN;

    /**
     * @description The silence duration. The system determines the end of the conversation based on the silence duration of the user. Unit: milliseconds. Valid values: 1000 to 20000.****
     *
     * >
     *
     *   If you specify a value out of the valid range, the default value **10000** is used.
     *
     *   The parameter value can be adjusted during the conversation. The last setting prevails.
     *
     * @example 10000
     *
     * @var int
     */
    public $muteTime;

    /**
     * @description The ID that is reserved for the caller of the operation. This ID is returned to the caller in a receipt message.
     *
     * The value is of the STRING type and must be 1 to 15 bytes in length.
     * @example 342268*****
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The pause duration. The system determines the end of a sentence based on the pause duration of the user in the conversation. Unit: milliseconds. Valid values: 300 to 1200.****
     *
     * >
     *
     *   If you specify a value out of the valid range, the default value **800** is used.
     *
     *   You cannot change the parameter value after specifying it.
     *
     * @example 800
     *
     * @var int
     */
    public $pauseTime;

    /**
     * @description Specifies whether to record the conversation. Valid values:
     *
     *   **true**: The conversation is recorded.
     *   **false**: The conversation is not recorded.
     *
     * @example true
     *
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
     * @description The maximum call duration. The call is automatically hung up when the maximum call duration is reached. Unit: seconds.
     *
     * > The maximum call duration is 3,600 seconds.
     * @example 120
     *
     * @var int
     */
    public $sessionTimeout;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var int
     */
    public $speed;

    /**
     * @description Specifies whether to enable streaming ASR, which intelligently judges what the user wants to express based on the first few words spoken by the user. Valid values:
     *
     *   **0**: Streaming ASR is disabled.
     *   **1**: Streaming ASR is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $streamAsr;

    /**
     * @description Specifies whether to set TTS sound parameters. Valid values:
     *
     *   **true**: TTS sound parameters must be set. You must set the **TtsStyle**, **TtsColume**, and **TtsSpeed** parameters to specify a sound style.
     *   **false**: TTS sound parameters do not need to be set. The values of TTS sound parameters do not take effect even if you set them.
     *
     * @example true
     *
     * @var bool
     */
    public $ttsConf;

    /**
     * @description The speed of TTS variable playback. Valid values: -200 to 200. Default value: 0.
     *
     * @example 100
     *
     * @var int
     */
    public $ttsSpeed;

    /**
     * @description The sound style for TTS variable playback. Default value: **xiaoyun**. For more information about the sound styles, see the **Sound styles** table below.
     *
     * @example xiaoyun
     *
     * @var string
     */
    public $ttsStyle;

    /**
     * @description The volume of TTS variable playback. Valid values: 0 to 100. Default value: 0.
     *
     * @example 10
     *
     * @var int
     */
    public $ttsVolume;

    /**
     * @description The recording file that is played back in the intelligent outbound call.
     *
     * The file can be an online file, a voice file uploaded from the Voice Messaging Service console, or a text-to-speech (TTS) template that contains variables. You can specify multiple files and a TTS variable together. Separate them with commas (,). The values of the variables in the TTS template are specified by the **VoiceCodeParam** parameter.
     *
     *   If you use an online file as the recording file, set the value of **VoiceCode** to the URL of the file that can be accessed over the Internet.
     *   If you use a voice file uploaded from the Voice Messaging Service console as the recording file, set the value of **VoiceCode** to the voice ID of the file. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice File Management**, click the **Intelligent Speech Interaction Recording File** tab, and then click **Details** in the Actions column to view the voice ID.
     *   If you use a TTS template that contains variables as the recording file, set the value of **VoiceCode** to a variable name such as $name$, and also set a value for the variable in the **VoiceCodeParam** parameter.
     *
     * @example 2d4c-4e78-8d2a-afbb06cf****.wav,$name$
     *
     * @var string
     */
    public $voiceCode;

    /**
     * @description The value of the TTS variable, in the JSON format. This value must match the TTS variable specified by the **VoiceCode** parameter.
     *
     * @example {"name":"hello"}
     *
     * @var string
     */
    public $voiceCodeParam;

    /**
     * @description The volume at which the recording file is played. Valid values: -4 to 4. We recommend that you set the value of this parameter to **1**.
     *
     * @example 1
     *
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
