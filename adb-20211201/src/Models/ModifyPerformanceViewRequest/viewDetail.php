<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest;

use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest\viewDetail\categories;
use AlibabaCloud\Tea\Model;

class viewDetail extends Model
{
    /**
     * @description The metric categories.
     *
     * @var categories[]
     */
    public $categories;

    /**
     * @description Specifies whether to enable the filter interaction feature. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $chartLinked;

    /**
     * @description The number of charts to display in each row.
     *
     * @example 3
     *
     * @var int
     */
    public $chartsPerLine;
    protected $_name = [
        'categories'    => 'Categories',
        'chartLinked'   => 'ChartLinked',
        'chartsPerLine' => 'ChartsPerLine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = [];
            if (null !== $this->categories && \is_array($this->categories)) {
                $n = 0;
                foreach ($this->categories as $item) {
                    $res['Categories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chartLinked) {
            $res['ChartLinked'] = $this->chartLinked;
        }
        if (null !== $this->chartsPerLine) {
            $res['ChartsPerLine'] = $this->chartsPerLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return viewDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['Categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChartLinked'])) {
            $model->chartLinked = $map['ChartLinked'];
        }
        if (isset($map['ChartsPerLine'])) {
            $model->chartsPerLine = $map['ChartsPerLine'];
        }

        return $model;
    }
}
