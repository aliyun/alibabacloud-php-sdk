<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyLindormV2InstanceRequest\nodeGroupList;

class ModifyLindormV2InstanceRequest extends Model
{
    /**
     * @var int
     */
    public $cloudStorageSize;

    /**
     * @var string
     */
    public $cloudStorageType;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var nodeGroupList[]
     */
    public $nodeGroupList;

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
    public $securityToken;

    /**
     * @var string
     */
    public $upgradeType;
    protected $_name = [
        'cloudStorageSize' => 'CloudStorageSize',
        'cloudStorageType' => 'CloudStorageType',
        'engineType' => 'EngineType',
        'instanceId' => 'InstanceId',
        'nodeGroupList' => 'NodeGroupList',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'upgradeType' => 'UpgradeType',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroupList)) {
            Model::validateArray($this->nodeGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudStorageSize) {
            $res['CloudStorageSize'] = $this->cloudStorageSize;
        }

        if (null !== $this->cloudStorageType) {
            $res['CloudStorageType'] = $this->cloudStorageType;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeGroupList) {
            if (\is_array($this->nodeGroupList)) {
                $res['NodeGroupList'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupList as $item1) {
                    $res['NodeGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
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
        if (isset($map['CloudStorageSize'])) {
            $model->cloudStorageSize = $map['CloudStorageSize'];
        }

        if (isset($map['CloudStorageType'])) {
            $model->cloudStorageType = $map['CloudStorageType'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeGroupList'])) {
            if (!empty($map['NodeGroupList'])) {
                $model->nodeGroupList = [];
                $n1 = 0;
                foreach ($map['NodeGroupList'] as $item1) {
                    $model->nodeGroupList[$n1++] = nodeGroupList::fromMap($item1);
                }
            }
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

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        return $model;
    }
}
