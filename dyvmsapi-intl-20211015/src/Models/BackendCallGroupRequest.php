<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\Tea\Model;

class BackendCallGroupRequest extends Model
{
    /**
     * @description The called numbers. You can specify up to 50,000 phone numbers.
     *
     * @var string[]
     */
    public $calledNumber;

    /**
     * @description The calling number.
     *
     * If you do not specify this parameter, the system uses a local random number as the display number. If you use a dedicated number for outbound calls, you must specify the purchased number. You can specify only one number. You can log on to the VMS console and choose Number Management to view the purchased phone numbers.
     * @example 852****1111
     *
     * @var string
     */
    public $callerIdNumber;

    /**
     * @description The ISO2 country code.
     *
     * @example HK
     *
     * @var string
     */
    public $countryId;

    /**
     * @description The ID reserved for the caller. This ID is returned to the caller in a receipt message.
     *
     * The value must be of the STRING type and 1 to 15 bytes in length.
     * @example 22596****
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of times the audio file is played. Valid values: 1 to 3.
     *
     * @example 1
     *
     * @var int
     */
    public $playTimes;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The delivery type. Valid values: 1 and 2.
     *
     * 2: The audio file is delivered at a scheduled time. If you specify SendType as 2, you must specify TimingStart.
     * @example 2
     *
     * @var int
     */
    public $sendType;

    /**
     * @description The playback speed. Valid values: -500 to 500.
     *
     * You must specify this parameter when the audio type is text-to-speech (TTS). You do not need to specify this parameter when you use recordings.
     * @example 0
     *
     * @var int
     */
    public $speed;

    /**
     * @description The task name.
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The time when the audio file is scheduled to be delivered.
     *
     * @example 2022-05-01T08:00:00+08:00
     *
     * @var string
     */
    public $timingStart;

    /**
     * @description The voice template ID of the audio file.
     *
     * You must specify either TtsCode or VoiceCode. You can specify TtsCode to use the audio file as the call content. Alternatively, you can specify VoiceCode to use preset text as the call content.
     * @example 100001
     *
     * @var string
     */
    public $ttsCode;

    /**
     * @description The TTS template ID.
     *
     * You must specify either TtsCode or VoiceCode. You can specify TtsCode to use the audio file as the call content. Alternatively, you can specify VoiceCode to use preset text as the call content.
     * @example 200001
     *
     * @var string
     */
    public $voiceCode;

    /**
     * @description The playback volume of the audio file. Valid values: 0 to 100. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'calledNumber'         => 'CalledNumber',
        'callerIdNumber'       => 'CallerIdNumber',
        'countryId'            => 'CountryId',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'playTimes'            => 'PlayTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sendType'             => 'SendType',
        'speed'                => 'Speed',
        'taskName'             => 'TaskName',
        'timingStart'          => 'TimingStart',
        'ttsCode'              => 'TtsCode',
        'voiceCode'            => 'VoiceCode',
        'volume'               => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callerIdNumber) {
            $res['CallerIdNumber'] = $this->callerIdNumber;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playTimes) {
            $res['PlayTimes'] = $this->playTimes;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sendType) {
            $res['SendType'] = $this->sendType;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->timingStart) {
            $res['TimingStart'] = $this->timingStart;
        }
        if (null !== $this->ttsCode) {
            $res['TtsCode'] = $this->ttsCode;
        }
        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BackendCallGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            if (!empty($map['CalledNumber'])) {
                $model->calledNumber = $map['CalledNumber'];
            }
        }
        if (isset($map['CallerIdNumber'])) {
            $model->callerIdNumber = $map['CallerIdNumber'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlayTimes'])) {
            $model->playTimes = $map['PlayTimes'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SendType'])) {
            $model->sendType = $map['SendType'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TimingStart'])) {
            $model->timingStart = $map['TimingStart'];
        }
        if (isset($map['TtsCode'])) {
            $model->ttsCode = $map['TtsCode'];
        }
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
