<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBPerformanceResponseBody\performanceKeys\performanceKeys;

use AlibabaCloud\Dara\Model;

class points extends Model
{
    /**
     * @var points\points[]
     */
    public $points;
    protected $_name = [
        'points' => 'points',
    ];

    public function validate()
    {
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['points'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['points'])) {
            if (!empty($map['points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['points'] as $item1) {
                    $model->points[$n1] = points\points::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
