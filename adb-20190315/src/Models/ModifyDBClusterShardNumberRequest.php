<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterShardNumberRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var int
     */
    public $newShardNumber;

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
    public $switchTime;

    /**
     * @var int
     */
    public $switchTimeMode;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'dryRun' => 'DryRun',
        'newShardNumber' => 'NewShardNumber',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'switchTime' => 'SwitchTime',
        'switchTimeMode' => 'SwitchTimeMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->newShardNumber) {
            $res['NewShardNumber'] = $this->newShardNumber;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['NewShardNumber'])) {
            $model->newShardNumber = $map['NewShardNumber'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        return $model;
    }
}
