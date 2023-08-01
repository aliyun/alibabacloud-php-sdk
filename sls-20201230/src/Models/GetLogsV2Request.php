<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetLogsV2Request extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $forward;

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
     * @var string
     */
    public $session;

    /**
     * @description Shard ID。
     *
     * @example 0
     *
     * @var int
     */
    public $shard;

    /**
     * @example 1627268185
     *
     * @var int
     */
    public $to;

    /**
     * @example ""
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'forward'  => 'forward',
        'from'     => 'from',
        'line'     => 'line',
        'offset'   => 'offset',
        'powerSql' => 'powerSql',
        'query'    => 'query',
        'reverse'  => 'reverse',
        'session'  => 'session',
        'shard'    => 'shard',
        'to'       => 'to',
        'topic'    => 'topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forward) {
            $res['forward'] = $this->forward;
        }
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
        if (null !== $this->session) {
            $res['session'] = $this->session;
        }
        if (null !== $this->shard) {
            $res['shard'] = $this->shard;
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
     * @return GetLogsV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['forward'])) {
            $model->forward = $map['forward'];
        }
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
        if (isset($map['session'])) {
            $model->session = $map['session'];
        }
        if (isset($map['shard'])) {
            $model->shard = $map['shard'];
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
