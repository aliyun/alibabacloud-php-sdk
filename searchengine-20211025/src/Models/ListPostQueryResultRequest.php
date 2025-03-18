<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListPostQueryResultRequest extends Model
{
    /**
     * @description The request body.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $body;

    /**
     * @description The query type. Valid values: sql: SQL query. ha3: Havenask query.
     *
     * @example ha3
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'body' => 'body',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPostQueryResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
