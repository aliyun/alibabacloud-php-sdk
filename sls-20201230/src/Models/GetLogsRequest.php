<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetLogsRequest extends Model
{
    /**
     * @example 1627268185
     *
     * @var int
     */
    public $from;

    /**
     * @example 100
     *
     * @var int
     */
    public $line;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example false
     *
     * @var bool
     */
    public $powerSql;

    /**
     * @example status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5
     *
     * @var string
     */
    public $query;

    /**
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example 1627269085
     *
     * @var int
     */
    public $to;

    /**
     * @example topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'from'     => 'from',
        'line'     => 'line',
        'offset'   => 'offset',
        'powerSql' => 'powerSql',
        'query'    => 'query',
        'reverse'  => 'reverse',
        'to'       => 'to',
        'topic'    => 'topic',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetLogsRequest
     */
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
