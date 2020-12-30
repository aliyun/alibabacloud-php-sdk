<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo;

use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $dataScale;

    /**
     * @var int
     */
    public $dataPrecision;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var bool
     */
    public $autoIncrement;

    /**
     * @var string
     */
    public $position;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var string
     */
    public $columnId;

    /**
     * @var int
     */
    public $dataLength;
    protected $_name = [
        'columnName'    => 'ColumnName',
        'description'   => 'Description',
        'dataScale'     => 'DataScale',
        'dataPrecision' => 'DataPrecision',
        'columnType'    => 'ColumnType',
        'autoIncrement' => 'AutoIncrement',
        'position'      => 'Position',
        'nullable'      => 'Nullable',
        'columnId'      => 'ColumnId',
        'dataLength'    => 'DataLength',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dataScale) {
            $res['DataScale'] = $this->dataScale;
        }
        if (null !== $this->dataPrecision) {
            $res['DataPrecision'] = $this->dataPrecision;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->autoIncrement) {
            $res['AutoIncrement'] = $this->autoIncrement;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->columnId) {
            $res['ColumnId'] = $this->columnId;
        }
        if (null !== $this->dataLength) {
            $res['DataLength'] = $this->dataLength;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DataScale'])) {
            $model->dataScale = $map['DataScale'];
        }
        if (isset($map['DataPrecision'])) {
            $model->dataPrecision = $map['DataPrecision'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['AutoIncrement'])) {
            $model->autoIncrement = $map['AutoIncrement'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['ColumnId'])) {
            $model->columnId = $map['ColumnId'];
        }
        if (isset($map['DataLength'])) {
            $model->dataLength = $map['DataLength'];
        }

        return $model;
    }
}
