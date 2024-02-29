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
     * @description Specifies whether to switch back over to the original primary zone. Valid values: true: Switch over back to the original primary zone. false: Do not switch back over to the original primary zone. If this parameter is set to false, the primary zone of the cluster is changed to the specified destination zone.
     *
     * @example false
     *
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
     * @description The latest start time to switch the primary zone within the scheduled time period. Specify the time in the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * >
     *
     *   The latest start time must be at least 30 minutes later than the earliest start time.
     *
     *   If you specify the `PlannedStartTime` parameter but do not specify the PlannedEndTime parameter, the latest start time of the task is set to a value that is calculated by `the value of the PlannedEndTime parameter + 30 minutes` by default. For example, if you set the `PlannedStartTime` parameter to `2021-01-14T09:00:00Z` and you do not specify the PlannedEndTime parameter, the latest start time of the task is set to `2021-01-14T09:30:00Z`.
     *
     * @example 2021-01-14T09:30:00Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest start time to switch the primary zone within the scheduled time period. Specify the time in the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * >
     *
     *   The earliest start time of the task can be a point in time within the next 24 hours. For example, if the current time is `2021-01-14T09:00:00Z`, you can specify a point in time that ranges from `2021-01-14T09:00:00Z` to `2021-01-15T09:00:00Z`.
     *
     *   If you left this parameter empty, the primary zone is immediately switched.
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
     * @description The virtual private cloud (VPC) ID of the destination primary zone.
     *
     * @example vpc-**********
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of vSwitch in the destination primary zone.
     *
     * >
     *
     *   For a PolarDB for Oracle or PolarDB for PostgreSQL cluster, this parameter is required.
     *
     *   For a PolarDB for MySQL cluster: - This parameter is optional if no vSwitches have been created in the destination zone. The default vSwitch is used. - This parameter is required if a vSwitch has been created in the destination zone.
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

    /**
     * @var string
     */
    public $zoneType;
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
        'zoneType'                => 'ZoneType',
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
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
