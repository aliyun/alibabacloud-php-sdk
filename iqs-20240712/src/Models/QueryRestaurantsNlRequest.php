<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class QueryRestaurantsNlRequest extends Model
{
    /**
     * @var AgentBaseQuery
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRestaurantsNlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = AgentBaseQuery::fromMap($map['body']);
        }

        return $model;
    }
}
