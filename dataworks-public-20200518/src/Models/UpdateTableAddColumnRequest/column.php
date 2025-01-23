<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnRequest;

use AlibabaCloud\Dara\Model;

class column extends Model
{
    /**
     * @var string
     */
    public $columnName;
    /**
     * @var string
     */
    public $columnNameCn;
    /**
     * @var string
     */
    public $columnType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
