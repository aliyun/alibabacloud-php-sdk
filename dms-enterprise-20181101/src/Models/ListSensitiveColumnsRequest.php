<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListSensitiveColumnsRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **ListSensitiveColumns**.
     *
     * @example test_column
     *
     * @var string
     */
    public $columnName;

    /**
     * @description 1860
     *
     * @example 1860
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   true: The database is a logical database.
     *   false: The database is a physical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The error message.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of the page to return.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries to return on each page.
     *
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The sensitivity level of the field. Valid values:
     *
     *   SENSITIVE: medium sensitivity level
     *   CONFIDENTIAL: high sensitivity level
     *
     * @example SENSITIVE
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description The error code.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The name of the table. You can call the [ListTables](~~141878~~) operation to query the ID of the table.
     *
     * @example 3
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnName'    => 'ColumnName',
        'dbId'          => 'DbId',
        'logic'         => 'Logic',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'schemaName'    => 'SchemaName',
        'securityLevel' => 'SecurityLevel',
        'tableName'     => 'TableName',
        'tid'           => 'Tid',
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
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
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
     * @return ListSensitiveColumnsRequest
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
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
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
