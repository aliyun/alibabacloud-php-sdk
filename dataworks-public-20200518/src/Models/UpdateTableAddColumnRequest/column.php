<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnRequest;

use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @var string
     */
    public $columnNameCn;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $columnType;
    protected $_name = [
        'columnNameCn' => 'ColumnNameCn',
        'columnName'   => 'ColumnName',
        'comment'      => 'Comment',
        'columnType'   => 'ColumnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnNameCn) {
            $res['ColumnNameCn'] = $this->columnNameCn;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
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
        if (isset($map['ColumnNameCn'])) {
            $model->columnNameCn = $map['ColumnNameCn'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }

        return $model;
    }
}
