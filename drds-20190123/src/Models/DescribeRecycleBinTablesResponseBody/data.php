<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinTablesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the table was created.
     *
     * @example 2019-09-16 14:42:06
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The original name of the table.
     *
     * @example BIN_T4AG3CY5WWXPKHITCHJY
     *
     * @var string
     */
    public $originalTableName;

    /**
     * @description The name of the table.
     *
     * @example test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'originalTableName' => 'OriginalTableName',
        'tableName'         => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->originalTableName) {
            $res['OriginalTableName'] = $this->originalTableName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['OriginalTableName'])) {
            $model->originalTableName = $map['OriginalTableName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
