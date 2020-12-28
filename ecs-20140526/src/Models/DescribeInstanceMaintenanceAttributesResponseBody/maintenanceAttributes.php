<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\actionOnMaintenance;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceWindows;
use AlibabaCloud\Tea\Model;

class maintenanceAttributes extends Model
{
    /**
     * @var maintenanceWindows[]
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
        if (null !== $this->maintenanceWindows) {
            $res['MaintenanceWindows'] = [];
            if (null !== $this->maintenanceWindows && \is_array($this->maintenanceWindows)) {
                $n = 0;
                foreach ($this->maintenanceWindows as $item) {
                    $res['MaintenanceWindows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return maintenanceAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaintenanceWindows'])) {
            if (!empty($map['MaintenanceWindows'])) {
                $model->maintenanceWindows = [];
                $n                         = 0;
                foreach ($map['MaintenanceWindows'] as $item) {
                    $model->maintenanceWindows[$n++] = null !== $item ? maintenanceWindows::fromMap($item) : $item;
                }
            }
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
