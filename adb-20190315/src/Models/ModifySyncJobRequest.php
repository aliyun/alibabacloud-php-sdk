<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifySyncJobRequest\sourceDBCluster;

class ModifySyncJobRequest extends Model
{
    /**
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
     * @var sourceDBCluster[]
     */
    public $sourceDBCluster;

    /**
     * @var string
     */
    public $syncPlatform;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceDBCluster' => 'SourceDBCluster',
        'syncPlatform' => 'SyncPlatform',
    ];

    public function validate()
    {
        if (\is_array($this->sourceDBCluster)) {
            Model::validateArray($this->sourceDBCluster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sourceDBCluster)) {
                $res['SourceDBCluster'] = [];
                $n1 = 0;
                foreach ($this->sourceDBCluster as $item1) {
                    $res['SourceDBCluster'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->syncPlatform) {
            $res['SyncPlatform'] = $this->syncPlatform;
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
                $n1 = 0;
                foreach ($map['SourceDBCluster'] as $item1) {
                    $model->sourceDBCluster[$n1++] = sourceDBCluster::fromMap($item1);
                }
            }
        }

        if (isset($map['SyncPlatform'])) {
            $model->syncPlatform = $map['SyncPlatform'];
        }

        return $model;
    }
}
