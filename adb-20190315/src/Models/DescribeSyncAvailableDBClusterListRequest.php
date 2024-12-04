<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncAvailableDBClusterListRequest\sourceDBCluster;
use AlibabaCloud\Tea\Model;

class DescribeSyncAvailableDBClusterListRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example Source
     *
     * @var string
     */
    public $queryType;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-4690g37929****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var sourceDBCluster[]
     */
    public $sourceDBCluster;

    /**
     * @example ADB-CDC
     *
     * @var string
     */
    public $syncPlatform;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'queryType'            => 'QueryType',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return DescribeSyncAvailableDBClusterListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
