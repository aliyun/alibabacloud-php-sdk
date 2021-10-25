<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceResponseBody\schemas;

use AlibabaCloud\Tea\Model;

class schema extends Model
{
    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'schemaName'  => 'SchemaName',
        'DBClusterId' => 'DBClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        return $model;
    }
}
