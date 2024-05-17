<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models;

use AlibabaCloud\Tea\Model;

class AISearchQuery extends Model
{
    /**
     * @example active
     *
     * @var string
     */
    public $card;

    /**
     * @example 今年五一假期放假时间表
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'card'  => 'card',
        'query' => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->card) {
            $res['card'] = $this->card;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AISearchQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['card'])) {
            $model->card = $map['card'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
