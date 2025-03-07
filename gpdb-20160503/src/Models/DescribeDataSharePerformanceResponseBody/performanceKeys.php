<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceResponseBody\performanceKeys\series;
use AlibabaCloud\Tea\Model;

class performanceKeys extends Model
{
    /**
     * @description The name of the performance metric.
     *
     * @example adbpg_datashare_topic_count
     *
     * @var string
     */
    public $name;

    /**
     * @description Details of the performance metric.
     *
     * @var series[]
     */
    public $series;

    /**
     * @description The unit of the performance metric.
     *
     * @example int
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'name'   => 'Name',
        'series' => 'Series',
        'unit'   => 'Unit',
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
        if (null !== $this->series) {
            $res['Series'] = [];
            if (null !== $this->series && \is_array($this->series)) {
                $n = 0;
                foreach ($this->series as $item) {
                    $res['Series'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n             = 0;
                foreach ($map['Series'] as $item) {
                    $model->series[$n++] = null !== $item ? series::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
