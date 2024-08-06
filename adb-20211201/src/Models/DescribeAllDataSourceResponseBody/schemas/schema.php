<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\schemas;

use AlibabaCloud\Tea\Model;

class schema extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *
     * @example amv-bp1pke2pcfavw****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The logical name of the database.
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
