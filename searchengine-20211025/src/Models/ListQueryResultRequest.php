<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListQueryResultRequest extends Model
{
    /**
     * @description 353490
     *
     * @example query%3D1%26%26config%3Dstart%3A0%2Chit%3A10%2Cformat%3Ajson%26%26cluster%3Dgeneral
     *
     * @var string
     */
    public $query;

    /**
     * @example query%3Dselect%20max(content_id)%20from%20generation
     *
     * @var string
     */
    public $sql;
    protected $_name = [
        'query' => 'query',
        'sql'   => 'sql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueryResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        return $model;
    }
}
