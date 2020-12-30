<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList;

use AlibabaCloud\Tea\Model;

class tableList extends Model
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
    public $tableId;
    protected $_name = [
        'tableName' => 'TableName',
        'tableType' => 'TableType',
        'tableId'   => 'TableId',
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
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        return $model;
    }
}
