<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue\tables;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $columnName;

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
    public $columnType;

    /**
     * @example null
     *
     * @var string
     */
    public $recordFieldType;

    /**
     * @example null
     *
     * @var string
     */
    public $rawColumnType;

    /**
     * @example null
     *
     * @var string
     */
    public $columnKey;

    /**
     * @example true
     *
     * @var bool
     */
    public $nullable;

    /**
     * @example null
     *
     * @var string
     */
    public $defaultValue;

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
     * @example utf8
     *
     * @var string
     */
    public $encoding;

    /**
     * @example comments
     *
     * @var string
     */
    public $columnComment;

    /**
     * @example false
     *
     * @var bool
     */
    public $isGenerateField;
    protected $_name = [
        'columnName'      => 'ColumnName',
        'position'        => 'Position',
        'columnType'      => 'ColumnType',
        'recordFieldType' => 'RecordFieldType',
        'rawColumnType'   => 'RawColumnType',
        'columnKey'       => 'ColumnKey',
        'nullable'        => 'Nullable',
        'defaultValue'    => 'DefaultValue',
        'dataLength'      => 'DataLength',
        'dataPrecision'   => 'DataPrecision',
        'dataScale'       => 'DataScale',
        'encoding'        => 'Encoding',
        'columnComment'   => 'ColumnComment',
        'isGenerateField' => 'IsGenerateField',
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
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->recordFieldType) {
            $res['RecordFieldType'] = $this->recordFieldType;
        }
        if (null !== $this->rawColumnType) {
            $res['RawColumnType'] = $this->rawColumnType;
        }
        if (null !== $this->columnKey) {
            $res['ColumnKey'] = $this->columnKey;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
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
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->columnComment) {
            $res['ColumnComment'] = $this->columnComment;
        }
        if (null !== $this->isGenerateField) {
            $res['IsGenerateField'] = $this->isGenerateField;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['RecordFieldType'])) {
            $model->recordFieldType = $map['RecordFieldType'];
        }
        if (isset($map['RawColumnType'])) {
            $model->rawColumnType = $map['RawColumnType'];
        }
        if (isset($map['ColumnKey'])) {
            $model->columnKey = $map['ColumnKey'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
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
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['ColumnComment'])) {
            $model->columnComment = $map['ColumnComment'];
        }
        if (isset($map['IsGenerateField'])) {
            $model->isGenerateField = $map['IsGenerateField'];
        }

        return $model;
    }
}
