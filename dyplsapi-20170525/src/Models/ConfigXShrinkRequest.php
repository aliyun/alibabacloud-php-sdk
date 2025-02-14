<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ConfigXShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callAbility;
    /**
     * @var int
     */
    public $callerParentId;
    /**
     * @var string
     */
    public $customerPoolKey;
    /**
     * @var string
     */
    public $GNFlag;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $reqId;
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
    public $sequenceCallsShrink;
    /**
     * @var string
     */
    public $sequenceMode;
    /**
     * @var string
     */
    public $smsAbility;
    /**
     * @var string
     */
    public $smsSignMode;
    /**
     * @var string
     */
    public $telX;
    protected $_name = [
        'callAbility'          => 'CallAbility',
        'callerParentId'       => 'CallerParentId',
        'customerPoolKey'      => 'CustomerPoolKey',
        'GNFlag'               => 'GNFlag',
        'ownerId'              => 'OwnerId',
        'reqId'                => 'ReqId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sequenceCallsShrink'  => 'SequenceCalls',
        'sequenceMode'         => 'SequenceMode',
        'smsAbility'           => 'SmsAbility',
        'smsSignMode'          => 'SmsSignMode',
        'telX'                 => 'TelX',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callAbility) {
            $res['CallAbility'] = $this->callAbility;
        }

        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }

        if (null !== $this->customerPoolKey) {
            $res['CustomerPoolKey'] = $this->customerPoolKey;
        }

        if (null !== $this->GNFlag) {
            $res['GNFlag'] = $this->GNFlag;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sequenceCallsShrink) {
            $res['SequenceCalls'] = $this->sequenceCallsShrink;
        }

        if (null !== $this->sequenceMode) {
            $res['SequenceMode'] = $this->sequenceMode;
        }

        if (null !== $this->smsAbility) {
            $res['SmsAbility'] = $this->smsAbility;
        }

        if (null !== $this->smsSignMode) {
            $res['SmsSignMode'] = $this->smsSignMode;
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
        if (isset($map['CallAbility'])) {
            $model->callAbility = $map['CallAbility'];
        }

        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }

        if (isset($map['CustomerPoolKey'])) {
            $model->customerPoolKey = $map['CustomerPoolKey'];
        }

        if (isset($map['GNFlag'])) {
            $model->GNFlag = $map['GNFlag'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SequenceCalls'])) {
            $model->sequenceCallsShrink = $map['SequenceCalls'];
        }

        if (isset($map['SequenceMode'])) {
            $model->sequenceMode = $map['SequenceMode'];
        }

        if (isset($map['SmsAbility'])) {
            $model->smsAbility = $map['SmsAbility'];
        }

        if (isset($map['SmsSignMode'])) {
            $model->smsSignMode = $map['SmsSignMode'];
        }

        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
