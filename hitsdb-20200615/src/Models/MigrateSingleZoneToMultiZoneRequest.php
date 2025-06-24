<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;

class MigrateSingleZoneToMultiZoneRequest extends Model
{
    /**
     * @var string
     */
    public $arbitraryVSwitchId;

    /**
     * @var string
     */
    public $arbitraryZoneId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerAccount;

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
    public $securityToken;

    /**
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @var string
     */
    public $standbyZoneId;
    protected $_name = [
        'arbitraryVSwitchId' => 'ArbitraryVSwitchId',
        'arbitraryZoneId' => 'ArbitraryZoneId',
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'standbyVSwitchId' => 'StandbyVSwitchId',
        'standbyZoneId' => 'StandbyZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arbitraryVSwitchId) {
            $res['ArbitraryVSwitchId'] = $this->arbitraryVSwitchId;
        }

        if (null !== $this->arbitraryZoneId) {
            $res['ArbitraryZoneId'] = $this->arbitraryZoneId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }

        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
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
        if (isset($map['ArbitraryVSwitchId'])) {
            $model->arbitraryVSwitchId = $map['ArbitraryVSwitchId'];
        }

        if (isset($map['ArbitraryZoneId'])) {
            $model->arbitraryZoneId = $map['ArbitraryZoneId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }

        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }

        return $model;
    }
}
