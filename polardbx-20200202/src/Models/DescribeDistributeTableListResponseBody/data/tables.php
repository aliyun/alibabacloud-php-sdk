<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDistributeTableListResponseBody\data;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var string
     */
    public $tbKey;

    /**
     * @var string
     */
    public $dbKey;
    protected $_name = [
        'tableName' => 'TableName',
        'tableType' => 'TableType',
        'tbKey'     => 'TbKey',
        'dbKey'     => 'DbKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }
        if (null !== $this->tbKey) {
            $res['TbKey'] = $this->tbKey;
        }
        if (null !== $this->dbKey) {
            $res['DbKey'] = $this->dbKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }
        if (isset($map['TbKey'])) {
            $model->tbKey = $map['TbKey'];
        }
        if (isset($map['DbKey'])) {
            $model->dbKey = $map['DbKey'];
        }

        return $model;
    }
}
