<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceMaintenanceAttributesResponseBody\maintenanceAttributes\maintenanceAttribute\maintenanceWindows;
use AlibabaCloud\Tea\Model;

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
     * @var bool
     */
    public $liveMigration;

    /**
     * @var maintenanceWindows
     */
    public $maintenanceWindows;
    protected $_name = [
        'actionOnMaintenance' => 'ActionOnMaintenance',
        'instanceId'          => 'InstanceId',
        'liveMigration'       => 'LiveMigration',
        'maintenanceWindows'  => 'MaintenanceWindows',
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
        if (null !== $this->liveMigration) {
            $res['LiveMigration'] = $this->liveMigration;
        }
        if (null !== $this->maintenanceWindows) {
            $res['MaintenanceWindows'] = null !== $this->maintenanceWindows ? $this->maintenanceWindows->toMap() : null;
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
        if (isset($map['LiveMigration'])) {
            $model->liveMigration = $map['LiveMigration'];
        }
        if (isset($map['MaintenanceWindows'])) {
            $model->maintenanceWindows = maintenanceWindows::fromMap($map['MaintenanceWindows']);
        }

        return $model;
    }
}
