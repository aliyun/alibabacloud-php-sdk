<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     *
     * 时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
     * @var int
     */
    public $from;

    /**
     * @description 子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     *
     * 时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。
     * @var int
     */
    public $to;

    /**
     * @description 该子时间区间内查询到的日志条数。
     *
     * @var int
     */
    public $count;

    /**
     * @description 当前查询结果在该子时间区间内的结果是否完整。
     *
     * Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。
     * @var string
     */
    public $progress;
    protected $_name = [
        'from'     => 'from',
        'to'       => 'to',
        'count'    => 'count',
        'progress' => 'progress',
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
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
