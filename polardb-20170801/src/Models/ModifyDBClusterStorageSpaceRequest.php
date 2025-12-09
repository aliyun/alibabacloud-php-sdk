<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterStorageSpaceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cloudProvider;

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
    public $plannedEndTime;

    /**
     * @var string
     */
    public $plannedStartTime;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $subCategory;
    protected $_name = [
        'autoUseCoupon' => 'AutoUseCoupon',
        'clientToken' => 'ClientToken',
        'cloudProvider' => 'CloudProvider',
        'DBClusterId' => 'DBClusterId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'plannedEndTime' => 'PlannedEndTime',
        'plannedStartTime' => 'PlannedStartTime',
        'promotionCode' => 'PromotionCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageSpace' => 'StorageSpace',
        'subCategory' => 'SubCategory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cloudProvider) {
            $res['CloudProvider'] = $this->cloudProvider;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }

        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->subCategory) {
            $res['SubCategory'] = $this->subCategory;
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
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CloudProvider'])) {
            $model->cloudProvider = $map['CloudProvider'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }

        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['SubCategory'])) {
            $model->subCategory = $map['SubCategory'];
        }

        return $model;
    }
}
