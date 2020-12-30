<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponseBody\sensitiveColumnList;

use AlibabaCloud\Tea\Model;

class sensitiveColumn extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var int
     */
    public $columnCount;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $functionType;
    protected $_name = [
        'columnName'    => 'ColumnName',
        'tableName'     => 'TableName',
        'securityLevel' => 'SecurityLevel',
        'columnCount'   => 'ColumnCount',
        'schemaName'    => 'SchemaName',
        'functionType'  => 'FunctionType',
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }

        return $model;
    }
}
