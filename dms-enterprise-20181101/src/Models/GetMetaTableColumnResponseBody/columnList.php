<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableColumnResponseBody;

use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @description Indicates whether the field is an auto-increment field. Valid values:
     *
     *   **true**: The field is an auto-increment field.
     *   **false**: The field is not an auto-increment field.
     *
     * @example false
     *
     * @var bool
     */
    public $autoIncrement;

    /**
     * @description The ID of the field.
     *
     * @example 63513****
     *
     * @var string
     */
    public $columnId;

    /**
     * @description The name of the field.
     *
     * @example has_promotion
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The data type of the field.
     *
     * >  The returned data type is not unique. For example, the returned data type can be **bigint** or **int**.
     * @example bigint(1)
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
     * @example 19
     *
     * @var int
     */
    public $dataPrecision;

    /**
     * @description The number of decimal places that the field shows.
     *
     * @example 0
     *
     * @var int
     */
    public $dataScale;

    /**
     * @description The description of the field.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the field can be empty. Valid values:
     *
     *   **true**: The field can be empty.
     *   **false**: The field cannot be empty.
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
     * @var int
     */
    public $position;

    /**
     * @description Indicates whether the field is the primary key. Valid values:
     *
     *   **true**: The field is the primary key.
     *   **false**: The field is not the primary key.
     *
     * @example true
     *
     * @var string
     */
    public $primaryKey;

    /**
     * @description The sensitivity level of the field. Valid values:
     *
     *   **INNER**: The field is not sensitive.
     *   **SENSITIVE**: The field is sensitive.
     *   **CONFIDENTIAL**: The field is confidential.
     *
     * >  For more information, see [Sensitivity levels of fields](~~66091~~).
     * @example INNER
     *
     * @var string
     */
    public $securityLevel;
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
        'primaryKey'    => 'PrimaryKey',
        'securityLevel' => 'SecurityLevel',
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
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
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
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        return $model;
    }
}
