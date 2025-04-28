<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class DescribeEIURangeRequest extends Model
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
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @var string
     */
    public $operation;

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
    public $productVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
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
     * @var string
     */
    public $storageSize;

    /**
     * @var string
     */
    public $subOperation;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'computeResource' => 'ComputeResource',
        'DBClusterId' => 'DBClusterId',
        'DBClusterVersion' => 'DBClusterVersion',
        'operation' => 'Operation',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'productVersion' => 'ProductVersion',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageSize' => 'StorageSize',
        'subOperation' => 'SubOperation',
        'zoneId' => 'ZoneId',
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

        if (null !== $this->DBClusterVersion) {
            $res['DBClusterVersion'] = $this->DBClusterVersion;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
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

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->subOperation) {
            $res['SubOperation'] = $this->subOperation;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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

        if (isset($map['DBClusterVersion'])) {
            $model->DBClusterVersion = $map['DBClusterVersion'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
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

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['SubOperation'])) {
            $model->subOperation = $map['SubOperation'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
