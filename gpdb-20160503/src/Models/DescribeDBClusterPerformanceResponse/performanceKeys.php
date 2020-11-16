<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponse;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponse\performanceKeys\series;
use AlibabaCloud\Tea\Model;

class performanceKeys extends Model
{
    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $name;

    /**
     * @var series[]
     */
    public $series;
    protected $_name = [
        'unit'   => 'Unit',
        'name'   => 'Name',
        'series' => 'Series',
    ];

    public function validate()
    {
        Model::validateRequired('unit', $this->unit, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('series', $this->series, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
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

        return $model;
    }
}
