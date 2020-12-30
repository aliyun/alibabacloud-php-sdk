<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class QueryHBaseHaDBRequest extends Model
{
    /**
     * @var string
     */
    public $bdsId;
    protected $_name = [
        'bdsId' => 'BdsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bdsId) {
            $res['BdsId'] = $this->bdsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryHBaseHaDBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BdsId'])) {
            $model->bdsId = $map['BdsId'];
        }

        return $model;
    }
}
