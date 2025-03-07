<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ColumnMetadata extends Model
{
    /**
     * @var string
     */
    public $columnDefault;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $dataType;

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
    public $isPrimaryKey;

    /**
     * @var bool
     */
    public $isSigned;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
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
     * @var string
     */
    public $udtName;
    protected $_name = [
        'columnDefault'   => 'ColumnDefault',
        'comment'         => 'Comment',
        'dataType'        => 'DataType',
        'isCaseSensitive' => 'IsCaseSensitive',
        'isCurrency'      => 'IsCurrency',
        'isPrimaryKey'    => 'IsPrimaryKey',
        'isSigned'        => 'IsSigned',
        'maxLength'       => 'MaxLength',
        'name'            => 'Name',
        'nullable'        => 'Nullable',
        'precision'       => 'Precision',
        'scale'           => 'Scale',
        'schemaName'      => 'SchemaName',
        'tableName'       => 'TableName',
        'udtName'         => 'UdtName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnDefault) {
            $res['ColumnDefault'] = $this->columnDefault;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->isCaseSensitive) {
            $res['IsCaseSensitive'] = $this->isCaseSensitive;
        }
        if (null !== $this->isCurrency) {
            $res['IsCurrency'] = $this->isCurrency;
        }
        if (null !== $this->isPrimaryKey) {
            $res['IsPrimaryKey'] = $this->isPrimaryKey;
        }
        if (null !== $this->isSigned) {
            $res['IsSigned'] = $this->isSigned;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
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
        if (null !== $this->udtName) {
            $res['UdtName'] = $this->udtName;
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
        if (isset($map['ColumnDefault'])) {
            $model->columnDefault = $map['ColumnDefault'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['IsCaseSensitive'])) {
            $model->isCaseSensitive = $map['IsCaseSensitive'];
        }
        if (isset($map['IsCurrency'])) {
            $model->isCurrency = $map['IsCurrency'];
        }
        if (isset($map['IsPrimaryKey'])) {
            $model->isPrimaryKey = $map['IsPrimaryKey'];
        }
        if (isset($map['IsSigned'])) {
            $model->isSigned = $map['IsSigned'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
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
        if (isset($map['UdtName'])) {
            $model->udtName = $map['UdtName'];
        }

        return $model;
    }
}
