<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ChangeColumnSecLevelRequest extends Model
{
    /**
     * @description The name of the field. You can call the [ListSensitiveColumns](~~188103~~) operation to query the name of the field.
     *
     * >  You can also call the [ListColumns](~~141870~~) operation to query the name of the field.
     * @example test_column
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The ID of the database. You can call the [SearchDatabase](~~141876~~) operation to query the ID of the database.
     *
     * >  You can also call the [ListDatabases](~~141873~~) operation to query the ID of a physical database and the [ListLogicDatabases](~~141874~~) operation to query the ID of a logical database.
     * @example 325
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   true: The database is a physical database.
     *   false: The database is a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $isLogic;

    /**
     * @description The new sensitivity level of the field that you want to specify. Valid values:
     *
     *   INNER: low sensitivity level
     *   SENSITIVE: medium sensitivity level
     *   CONFIDENTIAL: high sensitivity level
     *
     * @example SENSITIVE
     *
     * @var string
     */
    public $newLevel;

    /**
     * @description The name of the database. You can call the [ListSensitiveColumns](~~188103~~) operation to query the name of the database.
     *
     *   You can also call the [SearchDatabase](~~141876~~) operation to query the name of the database.
     *   You can also call the [ListDatabases](~~141873~~) operation to query the name of a physical database and the [ListLogicDatabases](~~141874~~) operation to query the name of a logical database.
     *
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name of the table. You can call the [ListSensitiveColumns](~~188103~~) operation to query the name of the table.
     *
     * >  You can also call the [ListTables](~~141878~~) operation to query the name of the table.
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](~~181330~~) topic.
     * @example 43253
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnName' => 'ColumnName',
        'dbId'       => 'DbId',
        'isLogic'    => 'IsLogic',
        'newLevel'   => 'NewLevel',
        'schemaName' => 'SchemaName',
        'tableName'  => 'TableName',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->isLogic) {
            $res['IsLogic'] = $this->isLogic;
        }
        if (null !== $this->newLevel) {
            $res['NewLevel'] = $this->newLevel;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeColumnSecLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['IsLogic'])) {
            $model->isLogic = $map['IsLogic'];
        }
        if (isset($map['NewLevel'])) {
            $model->newLevel = $map['NewLevel'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
