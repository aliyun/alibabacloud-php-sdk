<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisQueryByDayResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 是否已发布 0:未发布 1：已发布
     *
     * @var int
     */
    public $status;

    /**
     * @description 当前类型数量
     *
     * @var int
     */
    public $count;

    /**
     * @description 日期格式yyyy-MM-dd
     *
     * @var string
     */
    public $day;
    protected $_name = [
        'status' => 'Status',
        'count'  => 'Count',
        'day'    => 'Day',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }

        return $model;
    }
}
