<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricRequest;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricRequest\filter\conditions;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricRequest\filter\dateRange;
use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter conditions. Each object describes a filter condition.
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description The time range for the query.
     *
     * This parameter is required.
     *
     * @var dateRange
     */
    public $dateRange;
    protected $_name = [
        'conditions' => 'Conditions',
        'dateRange' => 'DateRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dateRange) {
            $res['DateRange'] = null !== $this->dateRange ? $this->dateRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DateRange'])) {
            $model->dateRange = dateRange::fromMap($map['DateRange']);
        }

        return $model;
    }
}
