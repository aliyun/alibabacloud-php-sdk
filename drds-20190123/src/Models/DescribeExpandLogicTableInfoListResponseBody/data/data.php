<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeExpandLogicTableInfoListResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates the database sharding key.
     *
     * @example id
     *
     * @var string
     */
    public $shardDbKey;

    /**
     * @description Indicates the table sharding key.
     *
     * @example address
     *
     * @var string
     */
    public $shardTbKey;

    /**
     * @description Indicates the name of the table.
     *
     * @example employee_split2
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'shardDbKey' => 'ShardDbKey',
        'shardTbKey' => 'ShardTbKey',
        'tableName'  => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shardDbKey) {
            $res['ShardDbKey'] = $this->shardDbKey;
        }
        if (null !== $this->shardTbKey) {
            $res['ShardTbKey'] = $this->shardTbKey;
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
        if (isset($map['ShardDbKey'])) {
            $model->shardDbKey = $map['ShardDbKey'];
        }
        if (isset($map['ShardTbKey'])) {
            $model->shardTbKey = $map['ShardTbKey'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
