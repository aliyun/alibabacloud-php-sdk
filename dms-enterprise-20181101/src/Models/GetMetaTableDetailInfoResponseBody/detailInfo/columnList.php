<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo;

use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @description Indicates whether the column is an auto-increment column. Valid values:
     *
     *   true: The column is an auto-increment column.
     *   false: The column is not an auto-increment column.
     *
     * @example true
     *
     * @var bool
     */
    public $autoIncrement;

    /**
     * @description The ID of the column.
     *
     * @example 191234849
     *
     * @var string
     */
    public $columnId;

    /**
     * @description The name of the column.
     *
     * @example id
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The data type of the column. Examples: Bigint, Int, and Varchar.
     *
     * @example bigint(20) unsigned
     *
     * @var string
     */
    public $columnType;

    /**
     * @description The length of the field.
     *
     * @example 0
     *
     * @var int
     */
    public $dataLength;

    /**
     * @description The precision of the field.
     *
     * @example 0
     *
     * @var int
     */
    public $dataPrecision;

    /**
     * @description The scale of the column.
     *
     * @example 0
     *
     * @var int
     */
    public $dataScale;

    /**
     * @description The description of the column.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the column is nullable. Valid values:
     *
     *   true: The column is nullable.
     *   false: The column is not nullable.
     *
     * @example false
     *
     * @var bool
     */
    public $nullable;

    /**
     * @description The position of the field in the table.
     *
     * @example 1
     *
     * @var string
     */
    public $position;
    protected $_name = [
        'autoIncrement' => 'AutoIncrement',
        'columnId'      => 'ColumnId',
        'columnName'    => 'ColumnName',
        'columnType'    => 'ColumnType',
        'dataLength'    => 'DataLength',
        'dataPrecision' => 'DataPrecision',
        'dataScale'     => 'DataScale',
        'description'   => 'Description',
        'nullable'      => 'Nullable',
        'position'      => 'Position',
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
        if (null !== $this->columnId) {
            $res['ColumnId'] = $this->columnId;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoIncrement'])) {
            $model->autoIncrement = $map['AutoIncrement'];
        }
        if (isset($map['ColumnId'])) {
            $model->columnId = $map['ColumnId'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
