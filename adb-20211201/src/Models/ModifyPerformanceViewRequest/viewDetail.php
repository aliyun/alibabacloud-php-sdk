<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest\viewDetail\categories;

class viewDetail extends Model
{
    /**
     * @var categories[]
     */
    public $categories;
    /**
     * @var bool
     */
    public $chartLinked;
    /**
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
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1                = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1                = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = categories::fromMap($item1);
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
