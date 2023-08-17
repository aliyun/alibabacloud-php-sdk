<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSchemasResponseBody\items;

use AlibabaCloud\Tea\Model;

class schema extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example am-bp1xxxxxxxx47
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'schemaName'  => 'SchemaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        return $model;
    }
}
