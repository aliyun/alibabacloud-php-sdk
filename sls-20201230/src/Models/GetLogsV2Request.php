<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetLogsV2Request extends Model
{
    /**
     * @var bool
     */
    public $forward;

    /**
     * @var int
     */
    public $from;

    /**
     * @var bool
     */
    public $highlight;

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
     * @var string
     */
    public $session;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'forward' => 'forward',
        'from' => 'from',
        'highlight' => 'highlight',
        'line' => 'line',
        'offset' => 'offset',
        'powerSql' => 'powerSql',
        'query' => 'query',
        'reverse' => 'reverse',
        'session' => 'session',
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
        if (null !== $this->forward) {
            $res['forward'] = $this->forward;
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->highlight) {
            $res['highlight'] = $this->highlight;
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

        if (null !== $this->session) {
            $res['session'] = $this->session;
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
        if (isset($map['forward'])) {
            $model->forward = $map['forward'];
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['highlight'])) {
            $model->highlight = $map['highlight'];
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

        if (isset($map['session'])) {
            $model->session = $map['session'];
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
