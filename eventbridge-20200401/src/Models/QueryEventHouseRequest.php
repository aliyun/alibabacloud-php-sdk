<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class QueryEventHouseRequest extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'limit' => 'Limit',
        'query' => 'Query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
