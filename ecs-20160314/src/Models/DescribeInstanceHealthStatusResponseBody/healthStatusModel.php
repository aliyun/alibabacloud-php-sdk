<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceHealthStatusResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceHealthStatusResponseBody\healthStatusModel\healthStatus;
use AlibabaCloud\Tea\Model;

class healthStatusModel extends Model
{
    /**
     * @var healthStatus
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'healthStatus' => 'HealthStatus',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = null !== $this->healthStatus ? $this->healthStatus->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthStatusModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = healthStatus::fromMap($map['HealthStatus']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
