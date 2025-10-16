<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\RetrieveMemoryRequest\query;

class RetrieveMemoryRequest extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var query
     */
    public $query;

    /**
     * @var string
     */
    public $store;

    /**
     * @var int
     */
    public $to;

    /**
     * @var int
     */
    public $topk;
    protected $_name = [
        'from' => 'from',
        'query' => 'query',
        'store' => 'store',
        'to' => 'to',
        'topk' => 'topk',
    ];

    public function validate()
    {
        if (null !== $this->query) {
            $this->query->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->query) {
            $res['query'] = null !== $this->query ? $this->query->toArray($noStream) : $this->query;
        }

        if (null !== $this->store) {
            $res['store'] = $this->store;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        if (null !== $this->topk) {
            $res['topk'] = $this->topk;
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
            $model->query = query::fromMap($map['query']);
        }

        if (isset($map['store'])) {
            $model->store = $map['store'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        if (isset($map['topk'])) {
            $model->topk = $map['topk'];
        }

        return $model;
    }
}
