<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList;

use AlibabaCloud\Tea\Model;

class tableList extends Model
{
    /**
     * @example NORMAL
     *
     * @var string
     */
    public $tableId;

    /**
     * @example 151977812
     *
     * @var string
     */
    public $tableName;

    /**
     * @example yuyang_test_0000
     *
     * @var string
     */
    public $tableType;
    protected $_name = [
        'tableId'   => 'TableId',
        'tableName' => 'TableName',
        'tableType' => 'TableType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
