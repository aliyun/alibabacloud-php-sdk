<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class ModifyParametersRequest extends Model
{
    /**
     * @var string
     */
    public $characterType;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $nodeId;

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
    public $parameters;

    /**
     * @var string
     */
    public $regionId;

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
    public $switchMode;
    protected $_name = [
        'characterType' => 'CharacterType',
        'DBInstanceId' => 'DBInstanceId',
        'nodeId' => 'NodeId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'switchMode' => 'SwitchMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
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
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        return $model;
    }
}
