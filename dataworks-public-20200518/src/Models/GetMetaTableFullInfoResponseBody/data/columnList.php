<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class columnList extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $columnGuid;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $isForeignKey;

    /**
     * @var bool
     */
    public $isPartitionColumn;

    /**
     * @var bool
     */
    public $isPrimaryKey;

    /**
     * @var int
     */
    public $position;
    protected $_name = [
        'caption' => 'Caption',
        'columnGuid' => 'ColumnGuid',
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'comment' => 'Comment',
        'isForeignKey' => 'IsForeignKey',
        'isPartitionColumn' => 'IsPartitionColumn',
        'isPrimaryKey' => 'IsPrimaryKey',
        'position' => 'Position',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
