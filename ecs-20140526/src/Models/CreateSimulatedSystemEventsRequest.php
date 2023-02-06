<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateSimulatedSystemEventsRequest extends Model
{
    /**
     * @description The type of the system event. Valid values:
     *
     *   SystemMaintenance.Reboot: The instance is restarted due to system maintenance.
     *   SystemFailure.Reboot: The instance is restarted due to a system failure.
     *   InstanceFailure.Reboot: The instance is restarted due to an instance failure.
     *   SystemMaintenance.Stop: The instance is stopped due to system maintenance.
     *   SystemMaintenance.Redeploy: The instance is redeployed due to system maintenance.
     *   SystemFailure.Redeploy: The instance is redeployed due to a system failure.
     *   SystemFailure.Stop: The instance is stopped due to a system failure.
     *   InstanceFailure.Reboot: The instance is restarted due to an instance failure.
     *
     * @example SystemMaintenance.Reboot
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The IDs of the instances. You can specify the IDs of up to 100 instances.
     *
     * @example i-bp1gtjxuuvwj17zr****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @description The start time of the scheduled event execution. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > For events that occur due to system failures or instance failures, the simulated events enter the Executing (`Executing`) state when the simulated events are created. The value of `NotBefore` is the time when the simulated events enter the Executed (`Executed`) state.
     * @example 2018-12-01T06:32:31Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
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
    protected $_name = [
        'eventType'            => 'EventType',
        'instanceId'           => 'InstanceId',
        'notBefore'            => 'NotBefore',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimulatedSystemEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
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

        return $model;
    }
}
