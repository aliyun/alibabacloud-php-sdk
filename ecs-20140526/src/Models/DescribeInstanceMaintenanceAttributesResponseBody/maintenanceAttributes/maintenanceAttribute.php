<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\maintenanceWindows;
use AlibabaCloud\Tea\Model;

class maintenanceAttribute extends Model
{
    /**
     * @var bool
     */
    public $notifyOnMaintenance;

    /**
     * @var maintenanceWindows
     */
    public $maintenanceWindows;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var actionOnMaintenance
     */
    public $actionOnMaintenance;
    protected $_name = [
        'notifyOnMaintenance' => 'NotifyOnMaintenance',
        'maintenanceWindows'  => 'MaintenanceWindows',
        'instanceId'          => 'InstanceId',
        'actionOnMaintenance' => 'ActionOnMaintenance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyOnMaintenance) {
            $res['NotifyOnMaintenance'] = $this->notifyOnMaintenance;
        }
        if (null !== $this->maintenanceWindows) {
            $res['MaintenanceWindows'] = null !== $this->maintenanceWindows ? $this->maintenanceWindows->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = null !== $this->actionOnMaintenance ? $this->actionOnMaintenance->toMap() : null;
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
        if (isset($map['NotifyOnMaintenance'])) {
            $model->notifyOnMaintenance = $map['NotifyOnMaintenance'];
        }
        if (isset($map['MaintenanceWindows'])) {
            $model->maintenanceWindows = maintenanceWindows::fromMap($map['MaintenanceWindows']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = actionOnMaintenance::fromMap($map['ActionOnMaintenance']);
        }

        return $model;
    }
}
