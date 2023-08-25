<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class FieldSchemaModel extends Model
{
    /**
     * @var bool
     */
    public $autoIncrement;

    /**
     * @var string
     */
    public $columnRawName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $compressFloatUseShort;

    /**
     * @var string
     */
    public $compression;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $encode;

    /**
     * @var bool
     */
    public $isPartitionKey;

    /**
     * @var string
     */
    public $mappedName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var string
     */
    public $onUpdate;

    /**
     * @var int
     */
    public $ordinalPosition;

    /**
     * @var string
     */
    public $physicalColumnName;

    /**
     * @var int
     */
    public $pkPosition;

    /**
     * @var int
     */
    public $precision;

    /**
     * @var bool
     */
    public $primarykey;

    /**
     * @var int
     */
    public $scale;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tokenizer;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'autoIncrement'         => 'AutoIncrement',
        'columnRawName'         => 'ColumnRawName',
        'comment'               => 'Comment',
        'compressFloatUseShort' => 'CompressFloatUseShort',
        'compression'           => 'Compression',
        'createTime'            => 'CreateTime',
        'dataType'              => 'DataType',
        'databaseName'          => 'DatabaseName',
        'defaultValue'          => 'DefaultValue',
        'delimiter'             => 'Delimiter',
        'encode'                => 'Encode',
        'isPartitionKey'        => 'IsPartitionKey',
        'mappedName'            => 'MappedName',
        'name'                  => 'Name',
        'nullable'              => 'Nullable',
        'onUpdate'              => 'OnUpdate',
        'ordinalPosition'       => 'OrdinalPosition',
        'physicalColumnName'    => 'PhysicalColumnName',
        'pkPosition'            => 'PkPosition',
        'precision'             => 'Precision',
        'primarykey'            => 'Primarykey',
        'scale'                 => 'Scale',
        'tableName'             => 'TableName',
        'tokenizer'             => 'Tokenizer',
        'type'                  => 'Type',
        'updateTime'            => 'UpdateTime',
        'valueType'             => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoIncrement) {
            $res['AutoIncrement'] = $this->autoIncrement;
        }
        if (null !== $this->columnRawName) {
            $res['ColumnRawName'] = $this->columnRawName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->compressFloatUseShort) {
            $res['CompressFloatUseShort'] = $this->compressFloatUseShort;
        }
        if (null !== $this->compression) {
            $res['Compression'] = $this->compression;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
        }
        if (null !== $this->encode) {
            $res['Encode'] = $this->encode;
        }
        if (null !== $this->isPartitionKey) {
            $res['IsPartitionKey'] = $this->isPartitionKey;
        }
        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->onUpdate) {
            $res['OnUpdate'] = $this->onUpdate;
        }
        if (null !== $this->ordinalPosition) {
            $res['OrdinalPosition'] = $this->ordinalPosition;
        }
        if (null !== $this->physicalColumnName) {
            $res['PhysicalColumnName'] = $this->physicalColumnName;
        }
        if (null !== $this->pkPosition) {
            $res['PkPosition'] = $this->pkPosition;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->primarykey) {
            $res['Primarykey'] = $this->primarykey;
        }
        if (null !== $this->scale) {
            $res['Scale'] = $this->scale;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tokenizer) {
            $res['Tokenizer'] = $this->tokenizer;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FieldSchemaModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoIncrement'])) {
            $model->autoIncrement = $map['AutoIncrement'];
        }
        if (isset($map['ColumnRawName'])) {
            $model->columnRawName = $map['ColumnRawName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CompressFloatUseShort'])) {
            $model->compressFloatUseShort = $map['CompressFloatUseShort'];
        }
        if (isset($map['Compression'])) {
            $model->compression = $map['Compression'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
        }
        if (isset($map['Encode'])) {
            $model->encode = $map['Encode'];
        }
        if (isset($map['IsPartitionKey'])) {
            $model->isPartitionKey = $map['IsPartitionKey'];
        }
        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['OnUpdate'])) {
            $model->onUpdate = $map['OnUpdate'];
        }
        if (isset($map['OrdinalPosition'])) {
            $model->ordinalPosition = $map['OrdinalPosition'];
        }
        if (isset($map['PhysicalColumnName'])) {
            $model->physicalColumnName = $map['PhysicalColumnName'];
        }
        if (isset($map['PkPosition'])) {
            $model->pkPosition = $map['PkPosition'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['Primarykey'])) {
            $model->primarykey = $map['Primarykey'];
        }
        if (isset($map['Scale'])) {
            $model->scale = $map['Scale'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Tokenizer'])) {
            $model->tokenizer = $map['Tokenizer'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
