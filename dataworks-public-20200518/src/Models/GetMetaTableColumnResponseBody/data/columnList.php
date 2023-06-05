<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableColumnResponseBody\data;

use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @description The number of times the field is read.
     *
     * @example data column
     *
     * @var string
     */
    public $caption;

    /**
     * @description Indicates whether the field is a partition field. Valid values:
     *
     *   true: The field is a partition field.
     *   false: The field is not a partition field.
     *
     * @example odps.engine_name.table_name.name
     *
     * @var string
     */
    public $columnGuid;

    /**
     * @description The remarks of the field.
     *
     * @example name
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The ordinal number of the field.
     *
     * @example string
     *
     * @var string
     */
    public $columnType;

    /**
     * @description Indicates whether the field is the primary key. Valid values:
     *
     *   true: The field is the primary key.
     *   false: The field is not the primary key.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example true
     *
     * @var bool
     */
    public $isForeignKey;

    /**
     * @description The data type of the field.
     *
     * @example false
     *
     * @var bool
     */
    public $isPartitionColumn;

    /**
     * @description The description of the field.
     *
     * @example false
     *
     * @var bool
     */
    public $isPrimaryKey;

    /**
     * @description Indicates whether the field is a foreign key. Valid values:
     *
     *   true: The field is a foreign key.
     *   false: The field is not a foreign key.
     *
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @example 2
     *
     * @var int
     */
    public $relationCount;
    protected $_name = [
        'caption'           => 'Caption',
        'columnGuid'        => 'ColumnGuid',
        'columnName'        => 'ColumnName',
        'columnType'        => 'ColumnType',
        'comment'           => 'Comment',
        'isForeignKey'      => 'IsForeignKey',
        'isPartitionColumn' => 'IsPartitionColumn',
        'isPrimaryKey'      => 'IsPrimaryKey',
        'position'          => 'Position',
        'relationCount'     => 'RelationCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->columnGuid) {
            $res['ColumnGuid'] = $this->columnGuid;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->isForeignKey) {
            $res['IsForeignKey'] = $this->isForeignKey;
        }
        if (null !== $this->isPartitionColumn) {
            $res['IsPartitionColumn'] = $this->isPartitionColumn;
        }
        if (null !== $this->isPrimaryKey) {
            $res['IsPrimaryKey'] = $this->isPrimaryKey;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->relationCount) {
            $res['RelationCount'] = $this->relationCount;
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
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['ColumnGuid'])) {
            $model->columnGuid = $map['ColumnGuid'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['IsForeignKey'])) {
            $model->isForeignKey = $map['IsForeignKey'];
        }
        if (isset($map['IsPartitionColumn'])) {
            $model->isPartitionColumn = $map['IsPartitionColumn'];
        }
        if (isset($map['IsPrimaryKey'])) {
            $model->isPrimaryKey = $map['IsPrimaryKey'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['RelationCount'])) {
            $model->relationCount = $map['RelationCount'];
        }

        return $model;
    }
}
