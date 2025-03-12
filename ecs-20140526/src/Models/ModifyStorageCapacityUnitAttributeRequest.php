<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyStorageCapacityUnitAttributeRequest extends Model
{
    /**
     * @description The new description of the SCU. The description must be 2 to 256 characters in length and cannot start with [http:// or https://.](http://https://。)
     *
     * @example testNewScuDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The new name of the SCU. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with [http:// or https://. It can contain letters, digits, colons (:), underscores (_), and hyphens (-).](http://https://。、（:）、（_）（-）。)
     *
     * @example testNewScuName
     *
     * @var string
     */
    public $name;

    /**
     * @example hide
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @example 111
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the SCU. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example hide
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @example 111
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the SCU.
     *
     * This parameter is required.
     * @example scu-bp67acfmxazb4p****
     *
     * @var string
     */
    public $storageCapacityUnitId;
    protected $_name = [
        'description'           => 'Description',
        'name'                  => 'Name',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStorageCapacityUnitAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['StorageCapacityUnitId'])) {
            $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
        }

        return $model;
    }
}
