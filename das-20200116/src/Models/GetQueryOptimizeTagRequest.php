<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetQueryOptimizeTagRequest extends Model
{
    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**: ApsaraDB RDS for MySQL
     *   **PolarDBMySQL**: PolarDB for MySQL
     *   **PostgreSQL**: ApsaraDB RDS for PostgreSQL
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The SQL template ID. You can call the [GetQueryOptimizeDataStats](https://help.aliyun.com/document_detail/405261.html) operation to query the SQL template ID.
     *
     * This parameter is required.
     * @example 29d9fef63e347d39c3436658a5fe5f2b
     *
     * @var string
     */
    public $sqlId;
    protected $_name = [
        'engine'     => 'Engine',
        'instanceId' => 'InstanceId',
        'sqlId'      => 'SqlId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryOptimizeTagRequest
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

        return $model;
    }
}
