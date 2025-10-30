<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class UpdateSubs700Request extends Model
{
    /**
     * @var string
     */
    public $asrModelId;

    /**
     * @var string
     */
    public $audio;

    /**
     * @var string
     */
    public $callRestrict;

    /**
     * @var string
     */
    public $defaultA;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $industrialId;

    /**
     * @var bool
     */
    public $needAsr;

    /**
     * @var bool
     */
    public $needRecord;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

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
     * @var int
     */
    public $subsId;

    /**
     * @var string
     */
    public $telA;

    /**
     * @var string
     */
    public $telB;

    /**
     * @var string
     */
    public $telX;
    protected $_name = [
        'asrModelId' => 'AsrModelId',
        'audio' => 'Audio',
        'callRestrict' => 'CallRestrict',
        'defaultA' => 'DefaultA',
        'expiration' => 'Expiration',
        'groupId' => 'GroupId',
        'industrialId' => 'IndustrialId',
        'needAsr' => 'NeedAsr',
        'needRecord' => 'NeedRecord',
        'operateType' => 'OperateType',
        'orderId' => 'OrderId',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'poolKey' => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'subsId' => 'SubsId',
        'telA' => 'TelA',
        'telB' => 'TelB',
        'telX' => 'TelX',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrModelId) {
            $res['AsrModelId'] = $this->asrModelId;
        }

        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }

        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }

        if (null !== $this->defaultA) {
            $res['DefaultA'] = $this->defaultA;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->industrialId) {
            $res['IndustrialId'] = $this->industrialId;
        }

        if (null !== $this->needAsr) {
            $res['NeedAsr'] = $this->needAsr;
        }

        if (null !== $this->needRecord) {
            $res['NeedRecord'] = $this->needRecord;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
        }

        if (null !== $this->telA) {
            $res['TelA'] = $this->telA;
        }

        if (null !== $this->telB) {
            $res['TelB'] = $this->telB;
        }

        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
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
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }

        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }

        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }

        if (isset($map['DefaultA'])) {
            $model->defaultA = $map['DefaultA'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['IndustrialId'])) {
            $model->industrialId = $map['IndustrialId'];
        }

        if (isset($map['NeedAsr'])) {
            $model->needAsr = $map['NeedAsr'];
        }

        if (isset($map['NeedRecord'])) {
            $model->needRecord = $map['NeedRecord'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }

        if (isset($map['TelA'])) {
            $model->telA = $map['TelA'];
        }

        if (isset($map['TelB'])) {
            $model->telB = $map['TelB'];
        }

        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
