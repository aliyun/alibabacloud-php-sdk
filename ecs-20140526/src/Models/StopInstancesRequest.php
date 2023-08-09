<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StopInstancesRequest extends Model
{
    /**
     * @description The IDs of instances.
     *
     * @example AllTogether
     *
     * @var string
     */
    public $batchOptimization;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The stop mode of the pay-as-you-go instance. Valid values:
     *
     *   StopCharging: economical mode. For information about the conditions on which `StopCharging` takes effect, see the "Conditions for enabling economical mode" section in [Economical mode](~~63353~~).
     *   KeepCharging: standard mode. You continue to be charged for instances that are stopped in standard mode.
     *
     * Default value: If the conditions for enabling the economical mode are met and you have enabled this mode in the ECS console, the default value is [StopCharging](~~63353#default~~). For more information, see the "Enable economical mode" section in `Economical mode`. Otherwise, the default value is `KeepCharging`.
     * @example false
     *
     * @var bool
     */
    public $forceStop;

    /**
     * @description The ID of instance N. Valid values of N: 1 to 100.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to forcibly stop the instance. Valid values:
     *
     *   true: forcibly stops the instance. This operation is equivalent to the power-off operation in common scenarios. Cache data that is not written to storage devices on the instance is lost.
     *   false: normally stops the instance.
     *
     * Default value: false.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies the batch operation mode. Valid values:
     *
     *   AllTogether: In this mode, a success message is returned if all specified instances are stopped. If one or more of the specified instances fail the check when you set the DryRun parameter to false, none of the specified instances can be stopped and an error message is returned.
     *   SuccessFirst: In this mode, each instance is separately stopped. The response contains the operation results for each instance.
     *
     * Default value: AllTogether.
     * @example KeepCharging
     *
     * @var string
     */
    public $stoppedMode;
    protected $_name = [
        'batchOptimization'    => 'BatchOptimization',
        'dryRun'               => 'DryRun',
        'forceStop'            => 'ForceStop',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'stoppedMode'          => 'StoppedMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchOptimization) {
            $res['BatchOptimization'] = $this->batchOptimization;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->forceStop) {
            $res['ForceStop'] = $this->forceStop;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchOptimization'])) {
            $model->batchOptimization = $map['BatchOptimization'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ForceStop'])) {
            $model->forceStop = $map['ForceStop'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
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
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }

        return $model;
    }
}
