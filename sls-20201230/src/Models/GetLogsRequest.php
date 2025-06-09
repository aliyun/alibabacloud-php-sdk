<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetLogsRequest extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $line;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var bool
     */
    public $powerSql;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'from' => 'from',
        'line' => 'line',
        'offset' => 'offset',
        'powerSql' => 'powerSql',
        'query' => 'query',
        'reverse' => 'reverse',
        'to' => 'to',
        'topic' => 'topic',
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

        if (null !== $this->line) {
            $res['line'] = $this->line;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->powerSql) {
            $res['powerSql'] = $this->powerSql;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->reverse) {
            $res['reverse'] = $this->reverse;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
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

        if (isset($map['line'])) {
            $model->line = $map['line'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['powerSql'])) {
            $model->powerSql = $map['powerSql'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['reverse'])) {
            $model->reverse = $map['reverse'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }

        return $model;
    }
}
