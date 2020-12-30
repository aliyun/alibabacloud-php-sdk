<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsResponseBody\columnList;

use AlibabaCloud\Tea\Model;

class column extends Model
{
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
    public $columnId;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $dataPrecision;

    /**
     * @var int
     */
    public $dataScale;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var int
     */
    public $dataLength;
    protected $_name = [
        'columnType'    => 'ColumnType',
        'autoIncrement' => 'AutoIncrement',
        'columnId'      => 'ColumnId',
        'defaultValue'  => 'DefaultValue',
        'sensitive'     => 'Sensitive',
        'columnName'    => 'ColumnName',
        'securityLevel' => 'SecurityLevel',
        'description'   => 'Description',
        'dataPrecision' => 'DataPrecision',
        'dataScale'     => 'DataScale',
        'functionType'  => 'FunctionType',
        'nullable'      => 'Nullable',
        'dataLength'    => 'DataLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->autoIncrement) {
            $res['AutoIncrement'] = $this->autoIncrement;
        }
        if (null !== $this->columnId) {
            $res['ColumnId'] = $this->columnId;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dataPrecision) {
            $res['DataPrecision'] = $this->dataPrecision;
        }
        if (null !== $this->dataScale) {
            $res['DataScale'] = $this->dataScale;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->dataLength) {
            $res['DataLength'] = $this->dataLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return column
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['AutoIncrement'])) {
            $model->autoIncrement = $map['AutoIncrement'];
        }
        if (isset($map['ColumnId'])) {
            $model->columnId = $map['ColumnId'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DataPrecision'])) {
            $model->dataPrecision = $map['DataPrecision'];
        }
        if (isset($map['DataScale'])) {
            $model->dataScale = $map['DataScale'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['DataLength'])) {
            $model->dataLength = $map['DataLength'];
        }

        return $model;
    }
}
