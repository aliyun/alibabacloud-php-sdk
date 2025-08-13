<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskIPProvince\grid;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskIPProvince\series;

class highRiskIPProvince extends Model
{
    /**
     * @var bool
     */
    public $animation;

    /**
     * @var grid
     */
    public $grid;

    /**
     * @var series[]
     */
    public $series;
    protected $_name = [
        'animation' => 'animation',
        'grid' => 'grid',
        'series' => 'series',
    ];

    public function validate()
    {
        if (null !== $this->grid) {
            $this->grid->validate();
        }
        if (\is_array($this->series)) {
            Model::validateArray($this->series);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->animation) {
            $res['animation'] = $this->animation;
        }

        if (null !== $this->grid) {
            $res['grid'] = null !== $this->grid ? $this->grid->toArray($noStream) : $this->grid;
        }

        if (null !== $this->series) {
            if (\is_array($this->series)) {
                $res['series'] = [];
                $n1 = 0;
                foreach ($this->series as $item1) {
                    $res['series'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['animation'])) {
            $model->animation = $map['animation'];
        }

        if (isset($map['grid'])) {
            $model->grid = grid::fromMap($map['grid']);
        }

        if (isset($map['series'])) {
            if (!empty($map['series'])) {
                $model->series = [];
                $n1 = 0;
                foreach ($map['series'] as $item1) {
                    $model->series[$n1] = series::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
