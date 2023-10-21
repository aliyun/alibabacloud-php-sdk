<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponseBody\customEventCounts;

use AlibabaCloud\Tea\Model;

class customEventCount extends Model
{
    /**
     * @description The name of the custom event.
     *
     * @example BABEL_BUY
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of times that the custom event occurred in the specified time period.
     *
     * @example 20
     *
     * @var int
     */
    public $num;

    /**
     * @description The time when the custom event occurred.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1552267615000
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'name' => 'Name',
        'num'  => 'Num',
        'time' => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customEventCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
