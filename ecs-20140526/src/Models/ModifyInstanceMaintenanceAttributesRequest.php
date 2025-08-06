<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesRequest\maintenanceWindow;

class ModifyInstanceMaintenanceAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @var string[]
     */
    public $instanceId;

    /**
     * @var maintenanceWindow[]
     */
    public $maintenanceWindow;

    /**
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
        'actionOnMaintenance' => 'ActionOnMaintenance',
        'instanceId' => 'InstanceId',
        'maintenanceWindow' => 'MaintenanceWindow',
        'notifyOnMaintenance' => 'NotifyOnMaintenance',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
        if (\is_array($this->maintenanceWindow)) {
            Model::validateArray($this->maintenanceWindow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }

        if (null !== $this->instanceId) {
            if (\is_array($this->instanceId)) {
                $res['InstanceId'] = [];
                $n1 = 0;
                foreach ($this->instanceId as $item1) {
                    $res['InstanceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maintenanceWindow) {
            if (\is_array($this->maintenanceWindow)) {
                $res['MaintenanceWindow'] = [];
                $n1 = 0;
                foreach ($this->maintenanceWindow as $item1) {
                    $res['MaintenanceWindow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }

        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $n1 = 0;
                foreach ($map['InstanceId'] as $item1) {
                    $model->instanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaintenanceWindow'])) {
            if (!empty($map['MaintenanceWindow'])) {
                $model->maintenanceWindow = [];
                $n1 = 0;
                foreach ($map['MaintenanceWindow'] as $item1) {
                    $model->maintenanceWindow[$n1] = maintenanceWindow::fromMap($item1);
                    ++$n1;
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
