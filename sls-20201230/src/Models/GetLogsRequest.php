<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetLogsRequest extends Model
{
    /**
     * @description 查询开始时间点。该时间是指写入日志数据时指定的日志时间。
     *
     * Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     * @var int
     */
    public $from;

    /**
     * @description 仅当query参数为查询语句时，该参数有效，表示请求返回的最大日志条数。最小值为0，最大值为100，默认值为100。
     *
     * @var int
     */
    public $line;

    /**
     * @description 仅当query参数为查询语句时，该参数有效，表示查询开始行。默认值为0。
     *
     * @var int
     */
    public $offset;

    /**
     * @description 用于指定返回结果是否按日志时间戳降序返回日志，精确到分钟级别。
     *
     * 当query参数为查询和分析语句时，参数reverse无效，由SQL分析语句中order by语法指定排序方式。如果order by为asc（默认），则为升序；如果order by为desc，则为降序。
     * @var bool
     */
    public $powerSql;

    /**
     * @description 查询语句或者分析语句。更多信息，请参见查询概述和分析概述。
     *
     * 在query参数的分析语句中加上set session parallel_sql=true;，表示使用SQL独享版。例如* | set session parallel_sql=true; select count(*) as pv 。
     *
     * 说明 当query参数中有分析语句（SQL语句）时，该接口的line参数和offset参数无效，建议设置为0，需通过SQL语句的LIMIT语法实现翻页。更多信息，请参见分页显示查询分析结果。
     * @var string
     */
    public $query;

    /**
     * @description 用于指定返回结果是否按日志时间戳降序返回日志，精确到分钟级别。
     *
     * 当query参数为查询和分析语句时，参数reverse无效，由SQL分析语句中order by语法指定排序方式。如果order by为asc（默认），则为升序；如果order by为desc，则为降序。
     * @var bool
     */
    public $reverse;

    /**
     * @description 查询结束时间点。该时间是指写入日志数据时指定的日志时间。
     *
     * Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     * @var int
     */
    public $to;

    /**
     * @description status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5
     *
     * @var string
     */
    public $topic;

    /**
     * @description 查询Logstore数据的类型。在该接口中固定取值为log。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'from'     => 'from',
        'line'     => 'line',
        'offset'   => 'offset',
        'powerSql' => 'powerSql',
        'query'    => 'query',
        'reverse'  => 'reverse',
        'to'       => 'to',
        'topic'    => 'topic',
        'type'     => 'type',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
