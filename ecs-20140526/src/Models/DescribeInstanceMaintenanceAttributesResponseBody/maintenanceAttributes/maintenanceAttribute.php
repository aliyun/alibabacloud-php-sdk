<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\maintenanceWindows;

class maintenanceAttribute extends Model
{
    /**
     * @var actionOnMaintenance
     */
    public $actionOnMaintenance;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var maintenanceWindows
     */
    public $maintenanceWindows;

    /**
     * @var bool
     */
    public $notifyOnMaintenance;
    protected $_name = [
        'actionOnMaintenance' => 'ActionOnMaintenance',
        'instanceId' => 'InstanceId',
        'maintenanceWindows' => 'MaintenanceWindows',
        'notifyOnMaintenance' => 'NotifyOnMaintenance',
    ];

    public function validate()
    {
        if (null !== $this->actionOnMaintenance) {
            $this->actionOnMaintenance->validate();
        }
        if (null !== $this->maintenanceWindows) {
            $this->maintenanceWindows->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = null !== $this->actionOnMaintenance ? $this->actionOnMaintenance->toArray($noStream) : $this->actionOnMaintenance;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maintenanceWindows) {
            $res['MaintenanceWindows'] = null !== $this->maintenanceWindows ? $this->maintenanceWindows->toArray($noStream) : $this->maintenanceWindows;
        }

        if (null !== $this->notifyOnMaintenance) {
            $res['NotifyOnMaintenance'] = $this->notifyOnMaintenance;
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
            $model->actionOnMaintenance = actionOnMaintenance::fromMap($map['ActionOnMaintenance']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaintenanceWindows'])) {
            $model->maintenanceWindows = maintenanceWindows::fromMap($map['MaintenanceWindows']);
        }

        if (isset($map['NotifyOnMaintenance'])) {
            $model->notifyOnMaintenance = $map['NotifyOnMaintenance'];
        }

        return $model;
    }
}
