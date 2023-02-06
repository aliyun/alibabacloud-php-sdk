<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesRequest\maintenanceWindow;
use AlibabaCloud\Tea\Model;

class ModifyInstanceMaintenanceAttributesRequest extends Model
{
    /**
     * @description The maintenance action. Valid values:
     *
     *   Stop: stops the instance.
     *   AutoRecover: automatically recovers the instance.
     *   AutoRedeploy: fails the instance over, which may cause damage to the data disks attached to the instance.
     *
     * @example AutoRecover
     *
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @description The IDs of the instances. You can specify up to 100 IDs.
     *
     * @example i-bp67acfmxazb4ph****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @description The list of maintenance windows.
     *
     * @var maintenanceWindow[]
     */
    public $maintenanceWindow;

    /**
     * @description Specifies whether to send an event notification before instance shutdown. Valid values:
     *
     *   True: sends an event notification.
     *   False: does not send an event notification.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $notifyOnMaintenance;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
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
        'actionOnMaintenance'  => 'ActionOnMaintenance',
        'instanceId'           => 'InstanceId',
        'maintenanceWindow'    => 'MaintenanceWindow',
        'notifyOnMaintenance'  => 'NotifyOnMaintenance',
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
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maintenanceWindow) {
            $res['MaintenanceWindow'] = [];
            if (null !== $this->maintenanceWindow && \is_array($this->maintenanceWindow)) {
                $n = 0;
                foreach ($this->maintenanceWindow as $item) {
                    $res['MaintenanceWindow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notifyOnMaintenance) {
            $res['NotifyOnMaintenance'] = $this->notifyOnMaintenance;
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
     * @return ModifyInstanceMaintenanceAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['MaintenanceWindow'])) {
            if (!empty($map['MaintenanceWindow'])) {
                $model->maintenanceWindow = [];
                $n                        = 0;
                foreach ($map['MaintenanceWindow'] as $item) {
                    $model->maintenanceWindow[$n++] = null !== $item ? maintenanceWindow::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NotifyOnMaintenance'])) {
            $model->notifyOnMaintenance = $map['NotifyOnMaintenance'];
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
