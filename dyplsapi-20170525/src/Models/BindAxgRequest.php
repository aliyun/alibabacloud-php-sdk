<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BindAxgRequest extends Model
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
    public $poolKey;

    /**
     * @var string
     */
    public $phoneNoA;

    /**
     * @var string
     */
    public $groupId;

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
    public $expiration;

    /**
     * @var string
     */
    public $expectCity;

    /**
     * @var bool
     */
    public $isRecordingEnabled;

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
    public $callDisplayType;

    /**
     * @var string
     */
    public $ringConfig;

    /**
     * @var bool
     */
    public $ASRStatus;

    /**
     * @var string
     */
    public $ASRModelId;

    /**
     * @var string
     */
    public $callRestrict;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'poolKey'              => 'PoolKey',
        'phoneNoA'             => 'PhoneNoA',
        'groupId'              => 'GroupId',
        'phoneNoB'             => 'PhoneNoB',
        'phoneNoX'             => 'PhoneNoX',
        'expiration'           => 'Expiration',
        'expectCity'           => 'ExpectCity',
        'isRecordingEnabled'   => 'IsRecordingEnabled',
        'outId'                => 'OutId',
        'outOrderId'           => 'OutOrderId',
        'callDisplayType'      => 'CallDisplayType',
        'ringConfig'           => 'RingConfig',
        'ASRStatus'            => 'ASRStatus',
        'ASRModelId'           => 'ASRModelId',
        'callRestrict'         => 'CallRestrict',
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
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->expectCity) {
            $res['ExpectCity'] = $this->expectCity;
        }
        if (null !== $this->isRecordingEnabled) {
            $res['IsRecordingEnabled'] = $this->isRecordingEnabled;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->outOrderId) {
            $res['OutOrderId'] = $this->outOrderId;
        }
        if (null !== $this->callDisplayType) {
            $res['CallDisplayType'] = $this->callDisplayType;
        }
        if (null !== $this->ringConfig) {
            $res['RingConfig'] = $this->ringConfig;
        }
        if (null !== $this->ASRStatus) {
            $res['ASRStatus'] = $this->ASRStatus;
        }
        if (null !== $this->ASRModelId) {
            $res['ASRModelId'] = $this->ASRModelId;
        }
        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAxgRequest
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
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['ExpectCity'])) {
            $model->expectCity = $map['ExpectCity'];
        }
        if (isset($map['IsRecordingEnabled'])) {
            $model->isRecordingEnabled = $map['IsRecordingEnabled'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OutOrderId'])) {
            $model->outOrderId = $map['OutOrderId'];
        }
        if (isset($map['CallDisplayType'])) {
            $model->callDisplayType = $map['CallDisplayType'];
        }
        if (isset($map['RingConfig'])) {
            $model->ringConfig = $map['RingConfig'];
        }
        if (isset($map['ASRStatus'])) {
            $model->ASRStatus = $map['ASRStatus'];
        }
        if (isset($map['ASRModelId'])) {
            $model->ASRModelId = $map['ASRModelId'];
        }
        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }

        return $model;
    }
}
