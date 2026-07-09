<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class ExecuteQueryRequest extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $maxOutputLength;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'from' => 'from',
        'length' => 'length',
        'maxOutputLength' => 'maxOutputLength',
        'offset' => 'offset',
        'query' => 'query',
        'to' => 'to',
        'type' => 'type',
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

        if (null !== $this->length) {
            $res['length'] = $this->length;
        }

        if (null !== $this->maxOutputLength) {
            $res['maxOutputLength'] = $this->maxOutputLength;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['length'])) {
            $model->length = $map['length'];
        }

        if (isset($map['maxOutputLength'])) {
            $model->maxOutputLength = $map['maxOutputLength'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
