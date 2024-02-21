<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetQueryOptimizeExecErrorSampleRequest extends Model
{
    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **PolarDBMySQL**
     *   **PostgreSQL**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The SQL template ID. You can call the [GetQueryOptimizeExecErrorStats](~~405235~~) operation to obtain the SQL template ID.
     *
     * @example 2e8147b5ca2dfc640dfd5e43d96a****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The date to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1642953600000
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'engine'     => 'Engine',
        'instanceId' => 'InstanceId',
        'sqlId'      => 'SqlId',
        'time'       => 'Time',
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
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryOptimizeExecErrorSampleRequest
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
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
