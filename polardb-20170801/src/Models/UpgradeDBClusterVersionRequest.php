<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBClusterVersionRequest extends Model
{
    /**
     * @description The ID of cluster.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to immediately run the task to modify parameters and restart the cluster. Valid values:
     *
     * > No need to use this parameter when calling this interface
     * @example false
     *
     * @var bool
     */
    public $fromTimeService;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The latest start time to run the task that updates the kernel version of the cluster. Specify the time in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * > *   The value of this parameter must be at least 30 minutes later than the value of PlannedStartTime.
     * >*   If you specify `PlannedStartTime` but do not specify PlannedEndTime, the latest start time of the task is `PlannedEndTime + 30 minutes`. For example, if you set `PlannedStartTime` to `2021-01-14T09:00:00Z` and do not specify PlannedEndTime, the latest start time of the task is set to `2021-01-14T09:30:00Z`.
     * @example 2021-01-14T09:30:00Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest start time to run the task that updates the kernel version of the cluster. Specify the time in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * > *   The earliest start time of the task can be a point in time within the next 24 hours. For example, if the current time is `2021-01-14T09:00:00Z`, you can specify a point in time between `2021-01-14T09:00:00Z` and `2021-01-15T09:00:00Z`.
     * >*   If you do not specify this parameter, the kernel update task runs immediately after you submit the request.
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
     * @description The code of the version to which you want to upgrade the cluster. You can call the [DescribeDBClusterVersion](~~2319145~~) operation to query the version code.
     *
     * @example 20230707
     *
     * @var string
     */
    public $targetDBRevisionVersionCode;

    /**
     * @description Kernel version upgrade label. The value is fixed as INNOVATE.
     * > this parameter is passed in, UpgradePolicy must pass COLD.
     * @example INNOVATE
     *
     * @var string
     */
    public $upgradeLabel;

    /**
     * @description Kernel version upgrade strategy. Value:
     *
     * - COLD: Cold upgrade. Currently, only PolarDB MySQL version 8.0 cluster version supports this upgrade method.
     * @example HOT
     *
     * @var string
     */
    public $upgradePolicy;

    /**
     * @description There is no need to use this parameter to upgrade the type when calling this interface. Value:
     *
     * - ALL (default): Upgrade both database proxy and kernel engine simultaneously
     * @example PROXY
     *
     * @var string
     */
    public $upgradeType;
    protected $_name = [
        'DBClusterId'                 => 'DBClusterId',
        'fromTimeService'             => 'FromTimeService',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'plannedEndTime'              => 'PlannedEndTime',
        'plannedStartTime'            => 'PlannedStartTime',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'targetDBRevisionVersionCode' => 'TargetDBRevisionVersionCode',
        'upgradeLabel'                => 'UpgradeLabel',
        'upgradePolicy'               => 'UpgradePolicy',
        'upgradeType'                 => 'UpgradeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->fromTimeService) {
            $res['FromTimeService'] = $this->fromTimeService;
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
        if (null !== $this->targetDBRevisionVersionCode) {
            $res['TargetDBRevisionVersionCode'] = $this->targetDBRevisionVersionCode;
        }
        if (null !== $this->upgradeLabel) {
            $res['UpgradeLabel'] = $this->upgradeLabel;
        }
        if (null !== $this->upgradePolicy) {
            $res['UpgradePolicy'] = $this->upgradePolicy;
        }
        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBClusterVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['FromTimeService'])) {
            $model->fromTimeService = $map['FromTimeService'];
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
        if (isset($map['TargetDBRevisionVersionCode'])) {
            $model->targetDBRevisionVersionCode = $map['TargetDBRevisionVersionCode'];
        }
        if (isset($map['UpgradeLabel'])) {
            $model->upgradeLabel = $map['UpgradeLabel'];
        }
        if (isset($map['UpgradePolicy'])) {
            $model->upgradePolicy = $map['UpgradePolicy'];
        }
        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        return $model;
    }
}
