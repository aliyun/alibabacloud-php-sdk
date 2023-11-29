<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetLogsV2Request extends Model
{
    /**
     * @description Specifies whether to page forward or backward for the scan-based query or the phrase query.
     *
     * @example false
     *
     * @var bool
     */
    public $forward;

    /**
     * @description The beginning of the time range to query. The value is the log time that is specified when log data is written.
     *
     * The time range specified by the from and to parameters is a left-closed and right-open interval. Each interval includes the specified start time but does not include the specified end time. If you specify the same value for the from and to parameters, the interval is invalid, and an error message is returned. The value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1627268185
     *
     * @var int
     */
    public $from;

    /**
     * @description The maximum number of logs to return for the request. This parameter takes effect only when the query parameter is set to a search statement. Valid values: 0 to 100. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $line;

    /**
     * @description The row from which the query starts. This parameter takes effect only when the query parameter is set to a search statement. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description Specifies whether to enable the SQL enhancement feature. By default, the feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $powerSql;

    /**
     * @description The search statement or the query statement. For more information, see the "Log search overview" and "Log analysis overview" topics.
     *
     * If you add set session parallel_sql=true; to the analytic statement in the query parameter, the dedicated SQL feature is enabled. Example: \* | set session parallel_sql=true; select count(\*) as pv.
     *
     * Note: If you specify an analytic statement in the query parameter, the line and offset parameters are invalid for this operation. In this case, we recommend that you set the line and offset parameters to 0 and use a LIMIT clause to limit the number of entries to return on each page. For more information, see the "Perform paged queries" topic.
     * @example status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5
     *
     * @var string
     */
    public $query;

    /**
     * @description Specifies whether to return logs in reverse chronological order of log timestamps. The log timestamps are accurate to the minute. Valid values:
     *
     * true: returns logs in reverse chronological order of log timestamps. false (default): returns logs in chronological order of log timestamps. Note The reverse parameter takes effect only when the query parameter is set to a search statement. The reverse parameter specifies the method used to sort the returned logs. If the query parameter is set to a query statement, which consists of a search statement and an analytic statement, the reverse parameter does not take effect. The method used to sort the returned logs is specified by the ORDER BY clause in the analytic statement. If you use the keyword asc in the ORDER BY clause, the logs are sorted in chronological order. If you use the keyword desc in the ORDER BY clause, the logs are sorted in reverse chronological order. By default, asc is used in the ORDER BY clause.
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
     * @description The ID of the shard.
     *
     * @example 0
     *
     * @var int
     */
    public $shard;

    /**
     * @description The end of the time range to query. The value is the log time that is specified when log data is written.
     *
     * The time range specified by the from and to parameters is a left-closed and right-open interval. Each interval includes the specified start time but does not include the specified end time. If you specify the same value for the from and to parameters, the interval is invalid, and an error message is returned. The value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1627268185
     *
     * @var int
     */
    public $to;

    /**
     * @description The topic of the logs. Default value: double quotation marks ("").
     *
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
