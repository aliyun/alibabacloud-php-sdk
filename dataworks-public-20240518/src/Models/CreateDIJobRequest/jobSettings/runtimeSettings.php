<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\jobSettings;

use AlibabaCloud\Tea\Model;

class runtimeSettings extends Model
{
    /**
     * @description The name of the configuration item. Valid values:
     *
     *   src.offline.datasource.max.connection: specifies the maximum number of connections that are allowed for reading data from the source of a batch synchronization task.
     *   dst.offline.truncate: specifies whether to clear the destination table before data writing.
     *   runtime.offline.speed.limit.enable: specifies whether throttling is enabled for a batch synchronization task.
     *   runtime.offline.concurrent: specifies the maximum number of parallel threads that are allowed for a batch synchronization task.
     *   runtime.enable.auto.create.schema: specifies whether schemas are automatically created in the destination of a synchronization task.
     *   runtime.realtime.concurrent: specifies the maximum number of parallel threads that are allowed for a real-time synchronization task.
     *   runtime.realtime.failover.minute.dataxcdc: The maximum waiting duration before a synchronization task retries the next restart if the previous restart fails after failover occurs. Unit: minutes.
     *   runtime.realtime.failover.times.dataxcdc: The maximum number of failures that are allowed for restarting a synchronization task after failovers occur.
     *
     * @example runtime.offline.concurrent
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the configuration item.
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
