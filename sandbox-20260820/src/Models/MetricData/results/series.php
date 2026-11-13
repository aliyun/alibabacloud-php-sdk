<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\MetricData\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\MetricData\results\series\points;

class series extends Model
{
    /**
     * @var string[]
     */
    public $dimensions;

    /**
     * @var points[]
     */
    public $points;
    protected $_name = [
        'dimensions' => 'dimensions',
        'points' => 'points',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['dimensions'] = [];
                foreach ($this->dimensions as $key1 => $value1) {
                    $res['dimensions'][$key1] = $value1;
                }
            }
        }

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
        if (isset($map['dimensions'])) {
            if (!empty($map['dimensions'])) {
                $model->dimensions = [];
                foreach ($map['dimensions'] as $key1 => $value1) {
                    $model->dimensions[$key1] = $value1;
                }
            }
        }

        if (isset($map['points'])) {
            if (!empty($map['points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['points'] as $item1) {
                    $model->points[$n1] = points::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
