<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo;

use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoIncrement;

    /**
     * @example 191234849
     *
     * @var string
     */
    public $columnId;

    /**
     * @example id
     *
     * @var string
     */
    public $columnName;

    /**
     * @example bigint(20) unsigned
     *
     * @var string
     */
    public $columnType;

    /**
     * @example 0
     *
     * @var int
     */
    public $dataLength;

    /**
     * @example 0
     *
     * @var int
     */
    public $dataPrecision;

    /**
     * @example 0
     *
     * @var int
     */
    public $dataScale;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $nullable;

    /**
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
