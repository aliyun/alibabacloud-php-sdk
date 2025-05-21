<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class MigrateDBClusterRequest extends Model
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
    public $dryRun;

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
    public $productVersion;

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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $secondaryVSwitchId;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $shardNumber;

    /**
     * @var string
     */
    public $storageResource;

    /**
     * @var string
     */
    public $storageResourceSize;
    protected $_name = [
        'computeResource' => 'ComputeResource',
        'DBClusterId' => 'DBClusterId',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'productForm' => 'ProductForm',
        'productVersion' => 'ProductVersion',
        'reservedNodeCount' => 'ReservedNodeCount',
        'reservedNodeSize' => 'ReservedNodeSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'secondaryVSwitchId' => 'SecondaryVSwitchId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'shardNumber' => 'ShardNumber',
        'storageResource' => 'StorageResource',
        'storageResourceSize' => 'StorageResourceSize',
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

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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

        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
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

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->secondaryVSwitchId) {
            $res['SecondaryVSwitchId'] = $this->secondaryVSwitchId;
        }

        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }

        if (null !== $this->shardNumber) {
            $res['ShardNumber'] = $this->shardNumber;
        }

        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }

        if (null !== $this->storageResourceSize) {
            $res['StorageResourceSize'] = $this->storageResourceSize;
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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

        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
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

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecondaryVSwitchId'])) {
            $model->secondaryVSwitchId = $map['SecondaryVSwitchId'];
        }

        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }

        if (isset($map['ShardNumber'])) {
            $model->shardNumber = $map['ShardNumber'];
        }

        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        if (isset($map['StorageResourceSize'])) {
            $model->storageResourceSize = $map['StorageResourceSize'];
        }

        return $model;
    }
}
