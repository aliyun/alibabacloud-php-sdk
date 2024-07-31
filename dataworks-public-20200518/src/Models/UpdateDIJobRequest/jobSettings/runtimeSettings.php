<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\jobSettings;

use AlibabaCloud\Tea\Model;

class runtimeSettings extends Model
{
    /**
     * @description The name of the configuration item. Valid values:
     *
     *   runtime.offline.speed.limit.mb: indicates the maximum transmission rate that is allowed for a batch synchronization task. This configuration item takes effect only when runtime.offline.speed.limit.enable is set to true.
     *   runtime.offline.speed.limit.enable: indicates whether throttling is enabled for a batch synchronization task.
     *   dst.offline.connection.max: indicates the maximum number of connections that are allowed for writing data to the destination of a batch synchronization task.
     *   runtime.offline.concurrent: indicates the maximum number of parallel threads that are allowed for a batch synchronization task.
     *   dst.realtime.connection.max: indicates the maximum number of connections that are allowed for writing data to the destination of a real-time synchronization task.
     *   runtime.enable.auto.create.schema: indicates whether schemas are automatically created in the destination of a synchronization task.
     *   src.offline.datasource.max.connection: indicates the maximum number of connections that are allowed for reading data from the source of a batch synchronization task.
     *   runtime.realtime.concurrent: indicates the maximum number of parallel threads that are allowed for a real-time synchronization task.
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
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

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
