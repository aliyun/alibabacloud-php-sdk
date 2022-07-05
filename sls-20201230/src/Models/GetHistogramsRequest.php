<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetHistogramsRequest extends Model
{
    /**
     * @description 查询开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     *
     * 时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
     * @var int
     */
    public $from;

    /**
     * @description 查询语句。仅支持查询语句，不支持分析语句。关于查询语句的详细语法，请参见查询语法。
     *
     * @var string
     */
    public $query;

    /**
     * @description 查询结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     *
     * 时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
     * @var int
     */
    public $to;

    /**
     * @description 日志主题。
     *
     * @var string
     */
    public $topic;

    /**
     * @description Logstore中数据的类型。该接口中固定取值为histogram。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'from'  => 'from',
        'query' => 'query',
        'to'    => 'to',
        'topic' => 'topic',
        'type'  => 'type',
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
        if (null !== $this->query) {
            $res['query'] = $this->query;
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
     * @return GetHistogramsRequest
     */
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
        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
