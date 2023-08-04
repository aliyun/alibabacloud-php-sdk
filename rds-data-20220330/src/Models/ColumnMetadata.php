<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class ColumnMetadata extends Model
{
    /**
     * @var int
     */
    public $arrayBaseColumnType;

    /**
     * @var bool
     */
    public $isAutoIncrement;

    /**
     * @var bool
     */
    public $isCaseSensitive;

    /**
     * @var bool
     */
    public $isCurrency;

    /**
     * @var bool
     */
    public $isSigned;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nullable;

    /**
     * @var int
     */
    public $precision;

    /**
     * @var int
     */
    public $scale;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'arrayBaseColumnType' => 'ArrayBaseColumnType',
        'isAutoIncrement'     => 'IsAutoIncrement',
        'isCaseSensitive'     => 'IsCaseSensitive',
        'isCurrency'          => 'IsCurrency',
        'isSigned'            => 'IsSigned',
        'label'               => 'Label',
        'name'                => 'Name',
        'nullable'            => 'Nullable',
        'precision'           => 'Precision',
        'scale'               => 'Scale',
        'schemaName'          => 'SchemaName',
        'tableName'           => 'TableName',
        'type'                => 'Type',
        'typeName'            => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayBaseColumnType) {
            $res['ArrayBaseColumnType'] = $this->arrayBaseColumnType;
        }
        if (null !== $this->isAutoIncrement) {
            $res['IsAutoIncrement'] = $this->isAutoIncrement;
        }
        if (null !== $this->isCaseSensitive) {
            $res['IsCaseSensitive'] = $this->isCaseSensitive;
        }
        if (null !== $this->isCurrency) {
            $res['IsCurrency'] = $this->isCurrency;
        }
        if (null !== $this->isSigned) {
            $res['IsSigned'] = $this->isSigned;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->scale) {
            $res['Scale'] = $this->scale;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ColumnMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayBaseColumnType'])) {
            $model->arrayBaseColumnType = $map['ArrayBaseColumnType'];
        }
        if (isset($map['IsAutoIncrement'])) {
            $model->isAutoIncrement = $map['IsAutoIncrement'];
        }
        if (isset($map['IsCaseSensitive'])) {
            $model->isCaseSensitive = $map['IsCaseSensitive'];
        }
        if (isset($map['IsCurrency'])) {
            $model->isCurrency = $map['IsCurrency'];
        }
        if (isset($map['IsSigned'])) {
            $model->isSigned = $map['IsSigned'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['Scale'])) {
            $model->scale = $map['Scale'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
