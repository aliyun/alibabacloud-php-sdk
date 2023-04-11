<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsResponseBody\columnList;

use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @description Indicates whether the column is an auto-increment column. Valid values:
     *
     *   true: The column is an auto-increment column.
     *   false: The column is not an auto-increment column.
     *
     * @example false
     *
     * @var bool
     */
    public $autoIncrement;

    /**
     * @description The ID of the column.
     *
     * @example 62589****
     *
     * @var string
     */
    public $columnId;

    /**
     * @description The name of the column.
     *
     * @example name
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The data type of the column.
     *
     * @example varchar
     *
     * @var string
     */
    public $columnType;

    /**
     * @description The length of the field.
     *
     * @example 4
     *
     * @var int
     */
    public $dataLength;

    /**
     * @description The number of valid digits for the field.
     *
     * @example 0
     *
     * @var int
     */
    public $dataPrecision;

    /**
     * @description The number of decimal places for the field.
     *
     * @example 0
     *
     * @var int
     */
    public $dataScale;

    /**
     * @description The default value of the column.
     *
     * @example def_value
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The description of the column.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the masking algorithm that is used for the field. Valid values:
     *
     *   null: No masking algorithm is used.
     *   DEFAULT: A full masking algorithm is used.
     *   FIX_POS: The fixed position is masked.
     *   FIX_CHAR: The fixed characters are replaced.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $functionType;

    /**
     * @description Indicates whether the column can be empty. Valid values:
     *
     *   **true**: The column can be empty.
     *   **false**: The column cannot be empty.
     *
     * @example false
     *
     * @var bool
     */
    public $nullable;

    /**
     * @description The security level of the column. Valid values:
     *
     *   INNER: The column is an internal column but not sensitive.
     *   SENSITIVE: The column is a sensitive column.
     *   CONFIDENTIAL: The column is a confidential column.
     *
     * > For more information, see [Sensitivity levels of fields](~~66091~~).
     * @example INNER
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description Indicates whether the column is a sensitive column. Valid values:
     *
     *   **true**: The column is a sensitive column.
     *   **false**: The column is not a sensitive column.
     *
     * @example false
     *
     * @var bool
     */
    public $sensitive;
    protected $_name = [
        'autoIncrement' => 'AutoIncrement',
        'columnId'      => 'ColumnId',
        'columnName'    => 'ColumnName',
        'columnType'    => 'ColumnType',
        'dataLength'    => 'DataLength',
        'dataPrecision' => 'DataPrecision',
        'dataScale'     => 'DataScale',
        'defaultValue'  => 'DefaultValue',
        'description'   => 'Description',
        'functionType'  => 'FunctionType',
        'nullable'      => 'Nullable',
        'securityLevel' => 'SecurityLevel',
        'sensitive'     => 'Sensitive',
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
