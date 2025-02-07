<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterClass;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $DBNodeGroupCount;
    /**
     * @var string
     */
    public $DBNodeStorage;
    /**
     * @var string
     */
    public $dbNodeStorageType;
    /**
     * @var string
     */
    public $disableWriteWindows;
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
    protected $_name = [
        'DBClusterClass'       => 'DBClusterClass',
        'DBClusterId'          => 'DBClusterId',
        'DBNodeGroupCount'     => 'DBNodeGroupCount',
        'DBNodeStorage'        => 'DBNodeStorage',
        'dbNodeStorageType'    => 'DbNodeStorageType',
        'disableWriteWindows'  => 'DisableWriteWindows',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterClass) {
            $res['DBClusterClass'] = $this->DBClusterClass;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodeGroupCount) {
            $res['DBNodeGroupCount'] = $this->DBNodeGroupCount;
        }

        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }

        if (null !== $this->dbNodeStorageType) {
            $res['DbNodeStorageType'] = $this->dbNodeStorageType;
        }

        if (null !== $this->disableWriteWindows) {
            $res['DisableWriteWindows'] = $this->disableWriteWindows;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterClass'])) {
            $model->DBClusterClass = $map['DBClusterClass'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodeGroupCount'])) {
            $model->DBNodeGroupCount = $map['DBNodeGroupCount'];
        }

        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }

        if (isset($map['DbNodeStorageType'])) {
            $model->dbNodeStorageType = $map['DbNodeStorageType'];
        }

        if (isset($map['DisableWriteWindows'])) {
            $model->disableWriteWindows = $map['DisableWriteWindows'];
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

        return $model;
    }
}
