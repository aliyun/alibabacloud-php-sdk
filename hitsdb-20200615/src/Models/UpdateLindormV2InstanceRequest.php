<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2InstanceRequest\engineList;

class UpdateLindormV2InstanceRequest extends Model
{
    /**
     * @var int
     */
    public $capacityStorageSize;

    /**
     * @var int
     */
    public $cloudStorageSize;

    /**
     * @var string
     */
    public $cloudStorageType;

    /**
     * @var bool
     */
    public $enableCapacityStorage;

    /**
     * @var engineList[]
     */
    public $engineList;

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
    protected $_name = [
        'capacityStorageSize' => 'CapacityStorageSize',
        'cloudStorageSize' => 'CloudStorageSize',
        'cloudStorageType' => 'CloudStorageType',
        'enableCapacityStorage' => 'EnableCapacityStorage',
        'engineList' => 'EngineList',
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->engineList)) {
            Model::validateArray($this->engineList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityStorageSize) {
            $res['CapacityStorageSize'] = $this->capacityStorageSize;
        }

        if (null !== $this->cloudStorageSize) {
            $res['CloudStorageSize'] = $this->cloudStorageSize;
        }

        if (null !== $this->cloudStorageType) {
            $res['CloudStorageType'] = $this->cloudStorageType;
        }

        if (null !== $this->enableCapacityStorage) {
            $res['EnableCapacityStorage'] = $this->enableCapacityStorage;
        }

        if (null !== $this->engineList) {
            if (\is_array($this->engineList)) {
                $res['EngineList'] = [];
                $n1 = 0;
                foreach ($this->engineList as $item1) {
                    $res['EngineList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityStorageSize'])) {
            $model->capacityStorageSize = $map['CapacityStorageSize'];
        }

        if (isset($map['CloudStorageSize'])) {
            $model->cloudStorageSize = $map['CloudStorageSize'];
        }

        if (isset($map['CloudStorageType'])) {
            $model->cloudStorageType = $map['CloudStorageType'];
        }

        if (isset($map['EnableCapacityStorage'])) {
            $model->enableCapacityStorage = $map['EnableCapacityStorage'];
        }

        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n1 = 0;
                foreach ($map['EngineList'] as $item1) {
                    $model->engineList[$n1] = engineList::fromMap($item1);
                    ++$n1;
                }
            }
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

        return $model;
    }
}
