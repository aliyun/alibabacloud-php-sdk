<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterServerlessConfRequest extends Model
{
    /**
     * @description Specifies whether to enable No-activity Suspension. Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $allowShutDown;

    /**
     * @description The ID of the serverless cluster.
     *
     * This parameter is required.
     * @example pc-bp10gr51qasnl****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies an immediate or scheduled task to modify parameters and restart the cluster. Valid values:
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
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The latest start time for upgrading the specifications within the scheduled time period. Specify the time in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     * > * The value of this parameter must be at least 30 minutes later than the value of PlannedStartTime.
     * >*   If you specify PlannedStartTime but do not specify PlannedEndTime, the latest start time of the task is set to a value that is calculated by using the following formula: `PlannedEndTime value + 30 minutes`. For example, if you set PlannedStartTime to `2021-01-14T09:00:00Z` and you do not specify PlannedEndTime, the latest start time of the task is set to `2021-01-14T09:30:00Z`.
     * @example 2021-01-14T09:30:00Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest start time of the scheduled task for adding the read-only node. The scheduled task specifies that the task is run in the required period. Specify the time in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * > *   The earliest start time of the scheduled task can be a point in time within the next 24 hours. For example, if the current time is `2021-01-14T09:00:00Z`, you can specify a point in time between `2021-01-14T09:00:00Z` and `2021-01-15T09:00:00Z`.
     * >*   If you leave this parameter empty, the task for adding the read-only node is immediately run by default.
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
     * @description The maximum number of stable AP read-only nodes. Valid values: 0 to 7.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleApRoNumMax;

    /**
     * @description The minimum number of stable AP read-only nodes. Valid values: 0 to 7.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleApRoNumMin;

    /**
     * @description The maximum number of PCUs per node for scaling. Valid values: 1 PCU to 32 PCUs.
     *
     * @example 10
     *
     * @var string
     */
    public $scaleMax;

    /**
     * @description The minimum number of PCUs per node for scaling. Valid values: 1 PCU to 31 PCUs.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleMin;

    /**
     * @description The maximum number of read-only nodes for scaling. Valid values: 0 to 15.
     *
     * @example 2
     *
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @description The minimum number of read-only nodes for scaling. Valid values: 0 to 15.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @description The detection period for No-activity Suspension. Valid values: 5 to 1440. Unit: minutes. The detection duration must be a multiple of 5 minutes.
     *
     * @example 10
     *
     * @var string
     */
    public $secondsUntilAutoPause;

    /**
     * @var string
     */
    public $serverlessRuleCpuEnlargeThreshold;

    /**
     * @var string
     */
    public $serverlessRuleCpuShrinkThreshold;

    /**
     * @var string
     */
    public $serverlessRuleMode;
    protected $_name = [
        'allowShutDown'                     => 'AllowShutDown',
        'DBClusterId'                       => 'DBClusterId',
        'fromTimeService'                   => 'FromTimeService',
        'ownerAccount'                      => 'OwnerAccount',
        'ownerId'                           => 'OwnerId',
        'plannedEndTime'                    => 'PlannedEndTime',
        'plannedStartTime'                  => 'PlannedStartTime',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'scaleApRoNumMax'                   => 'ScaleApRoNumMax',
        'scaleApRoNumMin'                   => 'ScaleApRoNumMin',
        'scaleMax'                          => 'ScaleMax',
        'scaleMin'                          => 'ScaleMin',
        'scaleRoNumMax'                     => 'ScaleRoNumMax',
        'scaleRoNumMin'                     => 'ScaleRoNumMin',
        'secondsUntilAutoPause'             => 'SecondsUntilAutoPause',
        'serverlessRuleCpuEnlargeThreshold' => 'ServerlessRuleCpuEnlargeThreshold',
        'serverlessRuleCpuShrinkThreshold'  => 'ServerlessRuleCpuShrinkThreshold',
        'serverlessRuleMode'                => 'ServerlessRuleMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }
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
        if (null !== $this->scaleApRoNumMax) {
            $res['ScaleApRoNumMax'] = $this->scaleApRoNumMax;
        }
        if (null !== $this->scaleApRoNumMin) {
            $res['ScaleApRoNumMin'] = $this->scaleApRoNumMin;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }
        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }
        if (null !== $this->secondsUntilAutoPause) {
            $res['SecondsUntilAutoPause'] = $this->secondsUntilAutoPause;
        }
        if (null !== $this->serverlessRuleCpuEnlargeThreshold) {
            $res['ServerlessRuleCpuEnlargeThreshold'] = $this->serverlessRuleCpuEnlargeThreshold;
        }
        if (null !== $this->serverlessRuleCpuShrinkThreshold) {
            $res['ServerlessRuleCpuShrinkThreshold'] = $this->serverlessRuleCpuShrinkThreshold;
        }
        if (null !== $this->serverlessRuleMode) {
            $res['ServerlessRuleMode'] = $this->serverlessRuleMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterServerlessConfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }
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
        if (isset($map['ScaleApRoNumMax'])) {
            $model->scaleApRoNumMax = $map['ScaleApRoNumMax'];
        }
        if (isset($map['ScaleApRoNumMin'])) {
            $model->scaleApRoNumMin = $map['ScaleApRoNumMin'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }
        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }
        if (isset($map['SecondsUntilAutoPause'])) {
            $model->secondsUntilAutoPause = $map['SecondsUntilAutoPause'];
        }
        if (isset($map['ServerlessRuleCpuEnlargeThreshold'])) {
            $model->serverlessRuleCpuEnlargeThreshold = $map['ServerlessRuleCpuEnlargeThreshold'];
        }
        if (isset($map['ServerlessRuleCpuShrinkThreshold'])) {
            $model->serverlessRuleCpuShrinkThreshold = $map['ServerlessRuleCpuShrinkThreshold'];
        }
        if (isset($map['ServerlessRuleMode'])) {
            $model->serverlessRuleMode = $map['ServerlessRuleMode'];
        }

        return $model;
    }
}
