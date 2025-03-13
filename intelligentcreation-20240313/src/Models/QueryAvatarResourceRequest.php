<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class QueryAvatarResourceRequest extends Model
{
    /**
     * @example 11111
     *
     * @var string
     */
    public $idempotentId;
    protected $_name = [
        'idempotentId' => 'idempotentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAvatarResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }

        return $model;
    }
}
