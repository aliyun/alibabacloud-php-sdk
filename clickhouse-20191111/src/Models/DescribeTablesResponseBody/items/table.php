<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTablesResponseBody\items;

use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example database
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'schemaName'  => 'SchemaName',
        'tableName'   => 'TableName',
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return table
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
