<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponseBody\sensitiveColumnList;

use AlibabaCloud\Tea\Model;

class sensitiveColumn extends Model
{
    /**
     * @description Queries sensitive fields in a table of a database.
     *
     * @example 1
     *
     * @var int
     */
    public $columnCount;

    /**
     * @description The name of the field. You can call the [ListColumns](~~141870~~) operation to query the name of the field.
     *
     * @example test_column
     *
     * @var string
     */
    public $columnName;

    /**
     * @example DEFAULT
     *
     * @var string
     */
    public $functionType;

    /**
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The ID of the request.
     *
     * @example SENSITIVE
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description The name of the field.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columnCount'   => 'ColumnCount',
        'columnName'    => 'ColumnName',
        'functionType'  => 'FunctionType',
        'schemaName'    => 'SchemaName',
        'securityLevel' => 'SecurityLevel',
        'tableName'     => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveColumn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
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

        return $model;
    }
}
