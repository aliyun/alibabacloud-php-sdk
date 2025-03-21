<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\ModifySyncJobRequest\sourceDBCluster;
use AlibabaCloud\Tea\Model;

class ModifySyncJobRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * This parameter is required.
     * @example am-bp12bh6z59nh8497f
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
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

    /**
     * @description The source instances or clusters.
     *
     * @var sourceDBCluster[]
     */
    public $sourceDBCluster;

    /**
     * @description The synchronization platform.
     *
     * @example ADB-CDC
     *
     * @var string
     */
    public $syncPlatform;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceDBCluster'      => 'SourceDBCluster',
        'syncPlatform'         => 'SyncPlatform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (null !== $this->sourceDBCluster) {
            $res['SourceDBCluster'] = [];
            if (null !== $this->sourceDBCluster && \is_array($this->sourceDBCluster)) {
                $n = 0;
                foreach ($this->sourceDBCluster as $item) {
                    $res['SourceDBCluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->syncPlatform) {
            $res['SyncPlatform'] = $this->syncPlatform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySyncJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['SourceDBCluster'])) {
            if (!empty($map['SourceDBCluster'])) {
                $model->sourceDBCluster = [];
                $n                      = 0;
                foreach ($map['SourceDBCluster'] as $item) {
                    $model->sourceDBCluster[$n++] = null !== $item ? sourceDBCluster::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SyncPlatform'])) {
            $model->syncPlatform = $map['SyncPlatform'];
        }

        return $model;
    }
}
