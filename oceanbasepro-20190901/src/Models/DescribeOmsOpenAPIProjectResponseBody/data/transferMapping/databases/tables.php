<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\transferMapping\databases;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data\transferMapping\databases\tables\adbTableSchema;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @description The schema of the ADB table. If the destination data source is ADB, you need to configure additional information for schema synchronization.
     *
     * @var adbTableSchema
     */
    public $adbTableSchema;

    /**
     * @description The list of filter columns, which are the columns to be synchronized.
     *
     * @var string[]
     */
    public $filterColumns;

    /**
     * @description The name of the mapped-to table or topic. If the destination data source is a database, this parameter specifies the name of the mapped-to table. If the destination data source is a message queue system, this parameter specifies the name of the mapped-to topic.
     *
     * @example mapped_table
     *
     * @var string
     */
    public $mappedName;

    /**
     * @description The list of sharding key columns. This parameter applies to scenarios where the destination data source is a message queue system.
     *
     * @var string[]
     */
    public $shardColumns;

    /**
     * @description The ID of the table. This parameter takes effect when the source data source is IDB.
     *
     * @example table_id
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the table.
     *
     * @example table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description Valid values: DATABASE and TABLE.
     *
     * @example DATABASE
     *
     * @var string
     */
    public $type;

    /**
     * @description The row filter conditions.
     *
     * @example id > 1
     *
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
