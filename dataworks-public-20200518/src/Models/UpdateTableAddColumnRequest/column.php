<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnRequest;

use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @description The name of the field.
     *
     * @example abc
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The display name of the field.
     *
     * @var string
     */
    public $columnNameCn;

    /**
     * @description The type of the field. For more information, see MaxCompute field types.
     *
     * @example string
     *
     * @var string
     */
    public $columnType;

    /**
     * @description The comment of the field.
     *
     * @var string
     */
    public $comment;
    protected $_name = [
        'columnName'   => 'ColumnName',
        'columnNameCn' => 'ColumnNameCn',
        'columnType'   => 'ColumnType',
        'comment'      => 'Comment',
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
        if (null !== $this->columnNameCn) {
            $res['ColumnNameCn'] = $this->columnNameCn;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnNameCn'])) {
            $model->columnNameCn = $map['ColumnNameCn'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        return $model;
    }
}
