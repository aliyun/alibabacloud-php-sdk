<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\transferMapping\databases;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\transferMapping\databases\tables\adbTableSchema;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var adbTableSchema
     */
    public $adbTableSchema;

    /**
     * @var string[]
     */
    public $filterColumns;

    /**
     * @var string
     */
    public $mappedName;

    /**
     * @var string[]
     */
    public $shardColumns;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $whereClause;
    protected $_name = [
        'adbTableSchema' => 'AdbTableSchema',
        'filterColumns'  => 'FilterColumns',
        'mappedName'     => 'MappedName',
        'shardColumns'   => 'ShardColumns',
        'tableId'        => 'TableId',
        'tableName'      => 'TableName',
        'type'           => 'Type',
        'whereClause'    => 'WhereClause',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adbTableSchema) {
            $res['AdbTableSchema'] = null !== $this->adbTableSchema ? $this->adbTableSchema->toMap() : null;
        }
        if (null !== $this->filterColumns) {
            $res['FilterColumns'] = $this->filterColumns;
        }
        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
        }
        if (null !== $this->shardColumns) {
            $res['ShardColumns'] = $this->shardColumns;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->whereClause) {
            $res['WhereClause'] = $this->whereClause;
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
        if (isset($map['AdbTableSchema'])) {
            $model->adbTableSchema = adbTableSchema::fromMap($map['AdbTableSchema']);
        }
        if (isset($map['FilterColumns'])) {
            if (!empty($map['FilterColumns'])) {
                $model->filterColumns = $map['FilterColumns'];
            }
        }
        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }
        if (isset($map['ShardColumns'])) {
            if (!empty($map['ShardColumns'])) {
                $model->shardColumns = $map['ShardColumns'];
            }
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WhereClause'])) {
            $model->whereClause = $map['WhereClause'];
        }

        return $model;
    }
}
