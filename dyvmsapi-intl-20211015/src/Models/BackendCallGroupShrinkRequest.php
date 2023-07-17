<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\Tea\Model;

class BackendCallGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $calledNumberShrink;

    /**
     * @example 852****1111
     *
     * @var string
     */
    public $callerIdNumber;

    /**
     * @example HK
     *
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
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
     * @example 2
     *
     * @var int
     */
    public $sendType;

    /**
     * @example 0
     *
     * @var int
     */
    public $speed;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @example 2022-05-01T08:00:00+08:00
     *
     * @var string
     */
    public $timingStart;

    /**
     * @example 100001
     *
     * @var string
     */
    public $ttsCode;

    /**
     * @example 200001
     *
     * @var string
     */
    public $voiceCode;

    /**
     * @example 100
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'calledNumberShrink'   => 'CalledNumber',
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
        if (null !== $this->calledNumberShrink) {
            $res['CalledNumber'] = $this->calledNumberShrink;
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
     * @return BackendCallGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumberShrink = $map['CalledNumber'];
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
