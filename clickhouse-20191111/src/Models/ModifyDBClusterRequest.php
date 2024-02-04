<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @description The specifications of the cluster.
     *
     *   Valid values when the cluster is of Single-replica Edition:
     *
     *   **S4-NEW**
     *   **S8**
     *   **S16**
     *   **S32**
     *   **S64**
     *   **S104**
     *
     *   Valid values when the cluster is of Double-replica Edition:
     *
     *   **C4-NEW**
     *   **C8**
     *   **C16**
     *   **C32**
     *   **C64**
     *   **C104**
     *
     * @example S4-NEW
     *
     * @var string
     */
    public $DBClusterClass;

    /**
     * @description The cluster ID.
     *
     * @example cc-bp19lo45sy98x****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The number of nodes in the cluster.
     *
     *   If the cluster is of Single-replica Edition, the value must be an integer that ranges from 1 to 48.
     *   If the cluster is of Double-replica Edition, the value must be an integer that ranges from 1 to 24.
     *
     * @example 1
     *
     * @var string
     */
    public $DBNodeGroupCount;

    /**
     * @description The storage capacity of a single node of the cluster. Unit: GB.
     *
     * >  This value is a multiple of 100.
     * @example 100
     *
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
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~170875~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
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
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyDBClusterRequest
     */
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
