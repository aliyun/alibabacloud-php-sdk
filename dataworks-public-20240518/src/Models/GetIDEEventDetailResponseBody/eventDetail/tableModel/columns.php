<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\tableModel;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The name of the column.
     *
     * @example ID
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The data type of the column.
     *
     * @example BIGINT
     *
     * @var string
     */
    public $columnType;

    /**
     * @description The remarks of the column.
     *
     * @example ID
     *
     * @var string
     */
    public $comment;

    /**
     * @description Indicates whether the column is a partition key column. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $isPartitionColumn;
    protected $_name = [
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'comment' => 'Comment',
        'isPartitionColumn' => 'IsPartitionColumn',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->isPartitionColumn) {
            $res['IsPartitionColumn'] = $this->isPartitionColumn;
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
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['IsPartitionColumn'])) {
            $model->isPartitionColumn = $map['IsPartitionColumn'];
        }

        return $model;
    }
}
