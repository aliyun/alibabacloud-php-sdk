<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class GetExampleQueryRequest extends Model
{
    /**
     * @description The ID of the template.
     *
     * >  You can call the [ListExampleQueries](~~ListExampleQueries~~) operation to obtain the template ID.
     * @example sq-0PfKy****
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
     * @return GetExampleQueryRequest
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
