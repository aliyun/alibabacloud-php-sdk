<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetLogsRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value is the log time that is specified when log data is written.
     *
     *   The time range that is specified in this operation is a left-closed, right-open interval. The interval includes the start time specified by the **from** parameter, but does not include the end time specified by the **to** parameter. If you specify the same value for the **from** and **to** parameters, the interval is invalid, and an error message is returned.
     *   The value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * If you want to specify a time range that is accurate to the second in your analytic statement, you must use the from_unixtime or to_unixtime function to convert the time format. For more information about the functions, see [from_unixtime function](https://help.aliyun.com/document_detail/63451.html) and [to_unixtime function](https://help.aliyun.com/document_detail/63451.html). Examples:
     *
     *   `* | SELECT * FROM log WHERE from_unixtime(__time__) > from_unixtime(1664186624) AND from_unixtime(__time__) < now()`
     *   `* | SELECT * FROM log WHERE __time__ > to_unixtime(date_parse(\\"2022-10-19 15:46:05\\", \\"%Y-%m-%d %H:%i:%s\\")) AND __time__ < to_unixtime(now())`
     *
     * This parameter is required.
     * @example 1627268185
     *
     * @var int
     */
    public $from;

    /**
     * @description The maximum number of logs to return for the request. This parameter takes effect only when the query parameter is set to a search statement. Minimum value: 0. Maximum value: 100. Default value: 100. For more information, see [Perform paged queries](https://help.aliyun.com/document_detail/89994.html).
     *
     * @example 100
     *
     * @var int
     */
    public $line;

    /**
     * @description The line from which the query starts. This parameter takes effect only when the query parameter is set to a search statement. Default value: 0. For more information, see [Perform paged queries](https://help.aliyun.com/document_detail/89994.html).
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description Specifies whether to enable the Dedicated SQL feature. For more information, see [Enable Dedicated SQL](https://help.aliyun.com/document_detail/223777.html). Valid values:
     *
     *   true: enables the Dedicated SQL feature.
     *   false (default): enables the Standard SQL feature.
     *
     * You can use the powerSql or **query** parameter to configure Dedicated SQL.
     * @example false
     *
     * @var bool
     */
    public $powerSql;

    /**
     * @description The search statement or the query statement. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html). If you add `set session parallel_sql=true;` to the analytic statement in the query parameter, Dedicated SQL is used. For example, you can set the query parameter to `* | set session parallel_sql=true; select count(*) as pv`. For more information about common errors that may occur during log query and analysis, see [How do I resolve common errors that occur when I query and analyze logs?](https://help.aliyun.com/document_detail/61628.html)
     *
     * > If you specify an analytic statement in the value of the query parameter, the line and offset parameters do not take effect. In this case, we recommend that you set the line and offset parameters to 0 and use the LIMIT clause to limit the number of logs to return on each page. For more information, see [Paged query](https://help.aliyun.com/document_detail/89994.html).
     * @example status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5
     *
     * @var string
     */
    public $query;

    /**
     * @description Specifies whether to return logs in reverse chronological order of log timestamps. The log timestamps are accurate to the minute. Valid values:
     *
     *   true: returns logs in reverse chronological order of log timestamps.
     *   false (default): returns logs in chronological order of log timestamps.
     *
     * >
     *
     *   The reverse parameter takes effect only when the query parameter is set to a search statement. The reverse parameter specifies the method used to sort returned logs.
     *   If the query parameter is set to a query statement, the reverse parameter does not take effect. The method used to sort returned logs is specified by the ORDER BY clause in the analytic statement. If you use the keyword asc in the ORDER BY clause, the logs are sorted in chronological order. If you use the keyword desc in the ORDER BY clause, the logs are sorted in reverse chronological order. By default, asc is used in the ORDER BY clause.
     *
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The end of the time range to query. The value is the log time that is specified when log data is written.
     *
     *   The time range that is specified in this operation is a left-closed, right-open interval. The interval includes the start time specified by the **from** parameter, but does not include the end time specified by the **to** parameter. If you specify the same value for the **from** and **to** parameters, the interval is invalid, and an error message is returned.
     *   The value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * If you want to specify a time range that is accurate to the second in your analytic statement, you must use the from_unixtime or to_unixtime function to convert the time format. For more information about the functions, see [from_unixtime function](https://help.aliyun.com/document_detail/63451.html) and [to_unixtime function](https://help.aliyun.com/document_detail/63451.html). Examples:
     *
     *   `* | SELECT * FROM log WHERE from_unixtime(__time__) > from_unixtime(1664186624) AND from_unixtime(__time__) < now()`
     *   `* | SELECT * FROM log WHERE __time__ > to_unixtime(date_parse(\\"2022-10-19 15:46:05\\", \\"%Y-%m-%d %H:%i:%s\\")) AND __time__ < to_unixtime(now())`
     *
     * This parameter is required.
     * @example 1627269085
     *
     * @var int
     */
    public $to;

    /**
     * @description The topic of the logs. The default value is an empty string. For more information, see [Topic](https://help.aliyun.com/document_detail/48881.html).
     *
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
