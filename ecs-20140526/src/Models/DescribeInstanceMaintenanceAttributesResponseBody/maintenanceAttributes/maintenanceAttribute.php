<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\maintenanceWindows;
use AlibabaCloud\Tea\Model;

class maintenanceAttribute extends Model
{
    /**
     * @description The attributes of the maintenance action of the instance.
     *
     * @var actionOnMaintenance
     */
    public $actionOnMaintenance;

    /**
     * @description The instance ID.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maintenance windows.
     *
     * @var maintenanceWindows
     */
    public $maintenanceWindows;

    /**
     * @description Indicates whether an event notification was sent before maintenance.
     *
     * @example false
     *
     * @var bool
     */
    public $notifyOnMaintenance;
    protected $_name = [
        'actionOnMaintenance' => 'ActionOnMaintenance',
        'instanceId'          => 'InstanceId',
        'maintenanceWindows'  => 'MaintenanceWindows',
        'notifyOnMaintenance' => 'NotifyOnMaintenance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = null !== $this->actionOnMaintenance ? $this->actionOnMaintenance->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maintenanceWindows) {
            $res['MaintenanceWindows'] = null !== $this->maintenanceWindows ? $this->maintenanceWindows->toMap() : null;
        }
        if (null !== $this->notifyOnMaintenance) {
            $res['NotifyOnMaintenance'] = $this->notifyOnMaintenance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return maintenanceAttribute
     */
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
