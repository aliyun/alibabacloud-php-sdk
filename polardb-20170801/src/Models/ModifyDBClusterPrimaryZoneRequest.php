<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterPrimaryZoneRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * > You can call the [DescribeDBClusters](~~173433~~) operation to query information about all clusters that are deployed in a specified region, such as the cluster ID.
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies an immediate or scheduled task to switch the primary zone. Valid values:
     *
     *   false: scheduled task
     *   true: immediate task
     *
     * @example false
     *
     * @var bool
     */
    public $fromTimeService;

    /**
     * @var string
     */
    public $isSwitchOverForDisaster;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The latest start time to run the task. Specify the time in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * >
     *
     *   The value of this parameter must be at least 30 minutes later than the value of the PlannedStartTime parameter.
     *
     *   By default, if you specify the `PlannedStartTime` parameter but do not specify the PlannedEndTime parameter, the latest start time of the task is set to a value that is calculated by using the following formula: `Value of the PlannedEndTime parameter + 30 minutes`. For example, if you set the `PlannedStartTime` parameter to `2021-01-14T09:00:00Z` and you do not specify the PlannedEndTime parameter, the latest start time of the task is set to `2021-01-14T09:30:00Z`.
     *
     * @example 2021-01-14T09:30:00Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest time to switch the primary zone within the scheduled time period. Specify the parameter in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * >
     *
     *   The earliest start time of the task can be a point in time within the next 24 hours. For example, if the current time is `2021-01-14T09:00:00Z`, you can specify a point in the time range from `2021-01-14T09:00:00Z` to `2021-01-15T09:00:00Z`.
     *
     *   If this parameter is empty, the primary zone is immediately switched.
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
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of in the destination primary zone.
     *
     * >
     *
     *   This parameter is required for a PolarDB for Oracle or PolarDB for PostgreSQL cluster.
     *
     *   For a PolarDB for MySQL cluster:
     *
     *   This parameter is optional if no vSwitches have been created in the destination zone. The default vSwitch is used.
     *   This parameter is required if a vSwitch has been created in the destination zone.
     *
     * @example vsw-**************
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the destination primary zone.
     *
     * > You can call the [DescribeRegions](~~98041~~) operation to query available zones.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBClusterId'             => 'DBClusterId',
        'fromTimeService'         => 'FromTimeService',
        'isSwitchOverForDisaster' => 'IsSwitchOverForDisaster',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'plannedEndTime'          => 'PlannedEndTime',
        'plannedStartTime'        => 'PlannedStartTime',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'VPCId'                   => 'VPCId',
        'vSwitchId'               => 'VSwitchId',
        'zoneId'                  => 'ZoneId',
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
        if (null !== $this->isSwitchOverForDisaster) {
            $res['IsSwitchOverForDisaster'] = $this->isSwitchOverForDisaster;
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
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterPrimaryZoneRequest
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
        if (isset($map['IsSwitchOverForDisaster'])) {
            $model->isSwitchOverForDisaster = $map['IsSwitchOverForDisaster'];
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
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
