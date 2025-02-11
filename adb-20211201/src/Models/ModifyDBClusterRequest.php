<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $computeResource;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var bool
     */
    public $enableDefaultResourcePool;
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
    public $productForm;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $reservedNodeCount;
    /**
     * @var string
     */
    public $reservedNodeSize;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var string
     */
    public $storageResource;
    protected $_name = [
        'computeResource'           => 'ComputeResource',
        'DBClusterId'               => 'DBClusterId',
        'enableDefaultResourcePool' => 'EnableDefaultResourcePool',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'productForm'               => 'ProductForm',
        'regionId'                  => 'RegionId',
        'reservedNodeCount'         => 'ReservedNodeCount',
        'reservedNodeSize'          => 'ReservedNodeSize',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'storageResource'           => 'StorageResource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->enableDefaultResourcePool) {
            $res['EnableDefaultResourcePool'] = $this->enableDefaultResourcePool;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->productForm) {
            $res['ProductForm'] = $this->productForm;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reservedNodeCount) {
            $res['ReservedNodeCount'] = $this->reservedNodeCount;
        }

        if (null !== $this->reservedNodeSize) {
            $res['ReservedNodeSize'] = $this->reservedNodeSize;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
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
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EnableDefaultResourcePool'])) {
            $model->enableDefaultResourcePool = $map['EnableDefaultResourcePool'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProductForm'])) {
            $model->productForm = $map['ProductForm'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReservedNodeCount'])) {
            $model->reservedNodeCount = $map['ReservedNodeCount'];
        }

        if (isset($map['ReservedNodeSize'])) {
            $model->reservedNodeSize = $map['ReservedNodeSize'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        return $model;
    }
}
