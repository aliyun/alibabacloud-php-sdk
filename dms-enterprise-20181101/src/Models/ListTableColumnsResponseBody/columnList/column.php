<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTableColumnsResponseBody\columnList;

use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoIncrement;

    /**
     * @example 12345
     *
     * @var string
     */
    public $columnId;

    /**
     * @example c1
     *
     * @var string
     */
    public $columnName;

    /**
     * @example varchar
     *
     * @var string
     */
    public $columnType;

    /**
     * @example 32
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
     * @example aaa
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example column desc
     *
     * @var string
     */
    public $description;

    /**
     * @example NULL
     *
     * @var string
     */
    public $functionType;

    /**
     * @example true
     *
     * @var bool
     */
    public $nullable;

    /**
     * @example INNER
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @example false
     *
     * @var bool
     */
    public $sensitive;
    protected $_name = [
        'autoIncrement' => 'AutoIncrement',
        'columnId' => 'ColumnId',
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'dataLength' => 'DataLength',
        'dataPrecision' => 'DataPrecision',
        'dataScale' => 'DataScale',
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'functionType' => 'FunctionType',
        'nullable' => 'Nullable',
        'securityLevel' => 'SecurityLevel',
        'sensitive' => 'Sensitive',
    ];

    public function validate() {}

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
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }

        return $model;
    }
}
