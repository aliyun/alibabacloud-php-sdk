<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListQueryResultRequest extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sql;
    protected $_name = [
        'query' => 'query',
        'sql' => 'sql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
