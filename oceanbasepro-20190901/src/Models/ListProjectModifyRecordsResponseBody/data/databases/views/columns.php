<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\databases\views;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example comments
     *
     * @var string
     */
    public $columnComment;

    /**
     * @example PRI
     *
     * @var string
     */
    public $columnKey;

    /**
     * @example col_name
     *
     * @var string
     */
    public $columnName;

    /**
     * @example FLOAT
     *
     * @var string
     */
    public $columnType;

    /**
     * @example null
     *
     * @var int
     */
    public $dataLength;

    /**
     * @example 64
     *
     * @var int
     */
    public $dataPrecision;

    /**
     * @example null
     *
     * @var int
     */
    public $dataScale;

    /**
     * @example null
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example utf16
     *
     * @var string
     */
    public $encoding;

    /**
     * @example false
     *
     * @var bool
     */
    public $isGenerateField;

    /**
     * @example mapped_name
     *
     * @var string
     */
    public $mappedName;

    /**
     * @example false
     *
     * @var bool
     */
    public $nullable;

    /**
     * @example null
     *
     * @var int
     */
    public $position;

    /**
     * @example null
     *
     * @var string
     */
    public $rawColumnType;

    /**
     * @example INT8
     *
     * @var string
     */
    public $recordFieldType;

    /**
     * @example DATABASE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'columnComment'   => 'ColumnComment',
        'columnKey'       => 'ColumnKey',
        'columnName'      => 'ColumnName',
        'columnType'      => 'ColumnType',
        'dataLength'      => 'DataLength',
        'dataPrecision'   => 'DataPrecision',
        'dataScale'       => 'DataScale',
        'defaultValue'    => 'DefaultValue',
        'encoding'        => 'Encoding',
        'isGenerateField' => 'IsGenerateField',
        'mappedName'      => 'MappedName',
        'nullable'        => 'Nullable',
        'position'        => 'Position',
        'rawColumnType'   => 'RawColumnType',
        'recordFieldType' => 'RecordFieldType',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnComment) {
            $res['ColumnComment'] = $this->columnComment;
        }
        if (null !== $this->columnKey) {
            $res['ColumnKey'] = $this->columnKey;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->dataLength) {
            $res['DataLength'] = $this->dataLength;
        }
        if (null !== $this->dataPrecision) {
            $res['DataPrecision'] = $this->dataPrecision;
        }
        if (null !== $this->dataScale) {
            $res['DataScale'] = $this->dataScale;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->isGenerateField) {
            $res['IsGenerateField'] = $this->isGenerateField;
        }
        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->rawColumnType) {
            $res['RawColumnType'] = $this->rawColumnType;
        }
        if (null !== $this->recordFieldType) {
            $res['RecordFieldType'] = $this->recordFieldType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnComment'])) {
            $model->columnComment = $map['ColumnComment'];
        }
        if (isset($map['ColumnKey'])) {
            $model->columnKey = $map['ColumnKey'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['DataLength'])) {
            $model->dataLength = $map['DataLength'];
        }
        if (isset($map['DataPrecision'])) {
            $model->dataPrecision = $map['DataPrecision'];
        }
        if (isset($map['DataScale'])) {
            $model->dataScale = $map['DataScale'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['IsGenerateField'])) {
            $model->isGenerateField = $map['IsGenerateField'];
        }
        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['RawColumnType'])) {
            $model->rawColumnType = $map['RawColumnType'];
        }
        if (isset($map['RecordFieldType'])) {
            $model->recordFieldType = $map['RecordFieldType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
