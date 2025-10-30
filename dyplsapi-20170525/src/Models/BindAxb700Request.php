<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class BindAxb700Request extends Model
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
     * @var int
     */
    public $callTimeout;

    /**
     * @var string
     */
    public $dtmfConfig;

    /**
     * @var string
     */
    public $expiration;

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
    public $orderId;

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
    public $poolKey;

    /**
     * @var string
     */
    public $recType;

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
        'callTimeout' => 'CallTimeout',
        'dtmfConfig' => 'DtmfConfig',
        'expiration' => 'Expiration',
        'industrialId' => 'IndustrialId',
        'needAsr' => 'NeedAsr',
        'needRecord' => 'NeedRecord',
        'orderId' => 'OrderId',
        'outId' => 'OutId',
        'outOrderId' => 'OutOrderId',
        'ownerId' => 'OwnerId',
        'poolKey' => 'PoolKey',
        'recType' => 'RecType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
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

        if (null !== $this->callTimeout) {
            $res['CallTimeout'] = $this->callTimeout;
        }

        if (null !== $this->dtmfConfig) {
            $res['DtmfConfig'] = $this->dtmfConfig;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
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

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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

        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }

        if (null !== $this->recType) {
            $res['RecType'] = $this->recType;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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

        if (isset($map['CallTimeout'])) {
            $model->callTimeout = $map['CallTimeout'];
        }

        if (isset($map['DtmfConfig'])) {
            $model->dtmfConfig = $map['DtmfConfig'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
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

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
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

        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }

        if (isset($map['RecType'])) {
            $model->recType = $map['RecType'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
