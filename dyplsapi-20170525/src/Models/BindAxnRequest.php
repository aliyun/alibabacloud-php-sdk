<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class BindAxnRequest extends Model
{
    /**
     * @var string
     */
    public $ASRModelId;

    /**
     * @var bool
     */
    public $ASRStatus;

    /**
     * @var int
     */
    public $callDisplayType;

    /**
     * @var string
     */
    public $callRestrict;

    /**
     * @var int
     */
    public $callTimeout;

    /**
     * @var string
     */
    public $expectCity;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var bool
     */
    public $isRecordingEnabled;

    /**
     * @var string
     */
    public $noType;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phoneNoA;

    /**
     * @var string
     */
    public $phoneNoB;

    /**
     * @var string
     */
    public $phoneNoX;

    /**
     * @var string
     */
    public $poolKey;

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
    public $ringConfig;
    protected $_name = [
        'ASRModelId' => 'ASRModelId',
        'ASRStatus' => 'ASRStatus',
        'callDisplayType' => 'CallDisplayType',
        'callRestrict' => 'CallRestrict',
        'callTimeout' => 'CallTimeout',
        'expectCity' => 'ExpectCity',
        'expiration' => 'Expiration',
        'extend' => 'Extend',
        'isRecordingEnabled' => 'IsRecordingEnabled',
        'noType' => 'NoType',
        'outId' => 'OutId',
        'outOrderId' => 'OutOrderId',
        'ownerId' => 'OwnerId',
        'phoneNoA' => 'PhoneNoA',
        'phoneNoB' => 'PhoneNoB',
        'phoneNoX' => 'PhoneNoX',
        'poolKey' => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ringConfig' => 'RingConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ASRModelId) {
            $res['ASRModelId'] = $this->ASRModelId;
        }

        if (null !== $this->ASRStatus) {
            $res['ASRStatus'] = $this->ASRStatus;
        }

        if (null !== $this->callDisplayType) {
            $res['CallDisplayType'] = $this->callDisplayType;
        }

        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }

        if (null !== $this->callTimeout) {
            $res['CallTimeout'] = $this->callTimeout;
        }

        if (null !== $this->expectCity) {
            $res['ExpectCity'] = $this->expectCity;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->isRecordingEnabled) {
            $res['IsRecordingEnabled'] = $this->isRecordingEnabled;
        }

        if (null !== $this->noType) {
            $res['NoType'] = $this->noType;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->outOrderId) {
            $res['OutOrderId'] = $this->outOrderId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }

        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }

        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }

        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->ringConfig) {
            $res['RingConfig'] = $this->ringConfig;
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
        if (isset($map['ASRModelId'])) {
            $model->ASRModelId = $map['ASRModelId'];
        }

        if (isset($map['ASRStatus'])) {
            $model->ASRStatus = $map['ASRStatus'];
        }

        if (isset($map['CallDisplayType'])) {
            $model->callDisplayType = $map['CallDisplayType'];
        }

        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }

        if (isset($map['CallTimeout'])) {
            $model->callTimeout = $map['CallTimeout'];
        }

        if (isset($map['ExpectCity'])) {
            $model->expectCity = $map['ExpectCity'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['IsRecordingEnabled'])) {
            $model->isRecordingEnabled = $map['IsRecordingEnabled'];
        }

        if (isset($map['NoType'])) {
            $model->noType = $map['NoType'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OutOrderId'])) {
            $model->outOrderId = $map['OutOrderId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }

        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }

        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }

        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RingConfig'])) {
            $model->ringConfig = $map['RingConfig'];
        }

        return $model;
    }
}
