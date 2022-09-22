<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanRequest;

use AlibabaCloud\Tea\Model;

class customMigrationTimes extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $migrationTime;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'migrationTime' => 'MigrationTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->migrationTime) {
            $res['MigrationTime'] = $this->migrationTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customMigrationTimes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MigrationTime'])) {
            $model->migrationTime = $map['MigrationTime'];
        }

        return $model;
    }
}
