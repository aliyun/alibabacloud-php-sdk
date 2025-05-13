<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetEntityStoreDataRequest extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'from',
        'query' => 'query',
        'to' => 'to',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
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
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
