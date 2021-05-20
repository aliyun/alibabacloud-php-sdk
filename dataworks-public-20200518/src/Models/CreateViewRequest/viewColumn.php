<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateViewRequest;

use AlibabaCloud\Tea\Model;

class viewColumn extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $comment;
    protected $_name = [
        'columnName' => 'ColumnName',
        'comment'    => 'Comment',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return viewColumn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        return $model;
    }
}
