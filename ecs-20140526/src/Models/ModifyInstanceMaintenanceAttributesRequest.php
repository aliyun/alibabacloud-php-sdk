<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceMaintenanceAttributesRequest\maintenanceWindow;
use AlibabaCloud\Tea\Model;

class ModifyInstanceMaintenanceAttributesRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

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
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'actionOnMaintenance'  => 'ActionOnMaintenance',
        'instanceId'           => 'InstanceId',
        'maintenanceWindow'    => 'MaintenanceWindow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
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

        return $model;
    }
}
