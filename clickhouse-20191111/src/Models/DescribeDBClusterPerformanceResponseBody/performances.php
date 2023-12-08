<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceResponseBody\performances\series;
use AlibabaCloud\Tea\Model;

class performances extends Model
{
    /**
     * @example MEM_USAGE
     *
     * @var string
     */
    public $key;

    /**
     * @example mem_usage
     *
     * @var string
     */
    public $name;

    /**
     * @var series[]
     */
    public $series;

    /**
     * @example %
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'key'    => 'Key',
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
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
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
     * @return performances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
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
