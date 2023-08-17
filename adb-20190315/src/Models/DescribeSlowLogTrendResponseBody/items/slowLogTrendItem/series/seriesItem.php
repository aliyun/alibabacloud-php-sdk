<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items\slowLogTrendItem\series;

use AlibabaCloud\Tea\Model;

class seriesItem extends Model
{
    /**
     * @description The name of the performance metric.
     *
     * @example slow_log_trend
     *
     * @var string
     */
    public $name;

    /**
     * @description The values of the performance metric.
     *
     * @example [ [ "2019-05-06T05:17:46.487Z", 5 ], [ "2019-05-06T05:18:20.784Z", 5 ] ]
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'values' => 'Values',
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
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seriesItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
