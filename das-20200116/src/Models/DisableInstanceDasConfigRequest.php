<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DisableInstanceDasConfigRequest extends Model
{
    /**
     * @description The database engine. Set the value to Redis.
     *
     * @example Redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database instance ID.
     *
     * @example r-bp1nti25tc7bq5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of auto scaling. Valid values:
     *
     *   **specScale**: The specifications of a database instance are automatically scaled up or down.
     *   **shardScale**: The number of shards for a database instance is automatically increased or decreased.
     *   **bandwidthScale**: The bandwidth of a database instance is automatically increased or decreased.
     *
     * @example bandwidthScale
     *
     * @var string
     */
    public $scaleType;
    protected $_name = [
        'engine'     => 'Engine',
        'instanceId' => 'InstanceId',
        'scaleType'  => 'ScaleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableInstanceDasConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }

        return $model;
    }
}
