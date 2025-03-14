<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterStorageSpaceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. The token is case-sensitive.
     *
     * @example 6000170000591aed949d0f54a343f1a4233c1e7d1c5c******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example pc-*************
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
     * @description The latest time to upgrade the specifications within the scheduled time period. Specify the time in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     * >- The value of this parameter must be at least 30 minutes later than PlannedStartTime.
     * >- By default, if you specify `PlannedStartTime` but do not specify PlannedEndTime, the latest start time of the task is set to `PlannedEndTime + 30 minutes`. For example, if you set `PlannedStartTime` to `2021-01-14T09:00:00Z` and you do not specify PlannedEndTime, the latest start time of the task is `2021-01-14T09:30:00Z`.
     *
     * @example 2021-01-14T09:30:00Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest time to upgrade the specifications within the scheduled time period. Specify the time in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     * >- This parameter takes effect only when `ModifyType` is set to `Upgrade`.
     * >- The earliest start time of the task can be a point in time within the next 24 hours. For example, if the current time is `2021-01-14T09:00:00Z`, you can specify a point in the time that ranges from `2021-01-14T09:00:00Z` to `2021-01-15T09:00:00Z`.
     * >- If this parameter is left empty, the upgrade task is immediately performed.
     *
     * @example 2021-01-14T09:00:00Z
     *
     * @var string
     */
    public $plannedStartTime;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The storage capacity that you can select when you change the cluster. Unit: GB.
     *
     * >  You can set this parameter for PolarDB for MySQL clusters of Standard Edition to a value that ranges from 20 to 32000.
     *
     * This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $storageSpace;

    /**
     * @description The category of the cluster. Default value: ON. Valid values:
     *
     *   **normal_exclusive**: dedicated
     *   **normal_general**: general-purpose
     *
     * @example normal_general
     *
     * @var string
     */
    public $subCategory;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'DBClusterId' => 'DBClusterId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'plannedEndTime' => 'PlannedEndTime',
        'plannedStartTime' => 'PlannedStartTime',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageSpace' => 'StorageSpace',
        'subCategory' => 'SubCategory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

    /**
     * @param array $map
     *
     * @return ModifyDBClusterStorageSpaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
