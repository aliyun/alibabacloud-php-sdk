<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class TableError extends Model
{
    /**
     * @var ErrorDetail
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'errorDetail' => 'ErrorDetail',
        'tableName'   => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = null !== $this->errorDetail ? $this->errorDetail->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableError
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = ErrorDetail::fromMap($map['ErrorDetail']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
