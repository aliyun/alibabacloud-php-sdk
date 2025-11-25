<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\Dara\Model;

class SignalCallRequest extends Model
{
    /**
     * @var string
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
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $signatureNonce;

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
    public $timestamp;

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
    public $ttsParam;

    /**
     * @var string
     */
    public $voiceCode;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'calledNumber' => 'CalledNumber',
        'callerIdNumber' => 'CallerIdNumber',
        'countryId' => 'CountryId',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'playTimes' => 'PlayTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sendType' => 'SendType',
        'signature' => 'Signature',
        'signatureNonce' => 'SignatureNonce',
        'speed' => 'Speed',
        'taskName' => 'TaskName',
        'timestamp' => 'Timestamp',
        'timingStart' => 'TimingStart',
        'ttsCode' => 'TtsCode',
        'ttsParam' => 'TtsParam',
        'voiceCode' => 'VoiceCode',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->signatureNonce) {
            $res['SignatureNonce'] = $this->signatureNonce;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->timingStart) {
            $res['TimingStart'] = $this->timingStart;
        }

        if (null !== $this->ttsCode) {
            $res['TtsCode'] = $this->ttsCode;
        }

        if (null !== $this->ttsParam) {
            $res['TtsParam'] = $this->ttsParam;
        }

        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
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

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['SignatureNonce'])) {
            $model->signatureNonce = $map['SignatureNonce'];
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TimingStart'])) {
            $model->timingStart = $map['TimingStart'];
        }

        if (isset($map['TtsCode'])) {
            $model->ttsCode = $map['TtsCode'];
        }

        if (isset($map['TtsParam'])) {
            $model->ttsParam = $map['TtsParam'];
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
