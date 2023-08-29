<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CancelQueryRequest extends Model
{
    /**
     * @example Q-BCA5E96CB84BB8B8
     *
     * @var string
     */
    public $queryId;
    protected $_name = [
        'queryId' => 'QueryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        return $model;
    }
}
