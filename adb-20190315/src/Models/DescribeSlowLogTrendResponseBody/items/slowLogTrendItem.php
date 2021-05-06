<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items\slowLogTrendItem\series;
use AlibabaCloud\Tea\Model;

class slowLogTrendItem extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var series
     */
    public $series;
    protected $_name = [
        'key'    => 'Key',
        'unit'   => 'Unit',
        'series' => 'Series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->series) {
            $res['Series'] = null !== $this->series ? $this->series->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowLogTrendItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Series'])) {
            $model->series = series::fromMap($map['Series']);
        }

        return $model;
    }
}
