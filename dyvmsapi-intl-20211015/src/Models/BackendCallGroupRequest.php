<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\Tea\Model;

class BackendCallGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerIdNumber;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var int
     */
    public $ownerId;

    /**
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
     * @var int
     */
    public $sendType;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $timingStart;

    /**
     * @var string
     */
    public $ttsCode;

    /**
     * @var string
     */
    public $voiceCode;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'calledNumber'         => 'CalledNumber',
        'callerIdNumber'       => 'CallerIdNumber',
        'countryId'            => 'CountryId',
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
