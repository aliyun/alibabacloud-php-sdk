<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskTagsLineChartResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskTagsLineChartResponseBody\resultObject\series;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskTagsLineChartResponseBody\resultObject\xaxis;

class resultObject extends Model
{
    /**
     * @var float[]
     */
    public $percent;

    /**
     * @var series[]
     */
    public $series;

    /**
     * @var int[]
     */
    public $total;

    /**
     * @var xaxis
     */
    public $xaxis;
    protected $_name = [
        'percent' => 'Percent',
        'series' => 'Series',
        'total' => 'Total',
        'xaxis' => 'Xaxis',
    ];

    public function validate()
    {
        if (\is_array($this->percent)) {
            Model::validateArray($this->percent);
        }
        if (\is_array($this->series)) {
            Model::validateArray($this->series);
        }
        if (\is_array($this->total)) {
            Model::validateArray($this->total);
        }
        if (null !== $this->xaxis) {
            $this->xaxis->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->percent) {
            if (\is_array($this->percent)) {
                $res['Percent'] = [];
                $n1 = 0;
                foreach ($this->percent as $item1) {
                    $res['Percent'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->series) {
            if (\is_array($this->series)) {
                $res['Series'] = [];
                $n1 = 0;
                foreach ($this->series as $item1) {
                    $res['Series'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            if (\is_array($this->total)) {
                $res['Total'] = [];
                $n1 = 0;
                foreach ($this->total as $item1) {
                    $res['Total'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->xaxis) {
            $res['Xaxis'] = null !== $this->xaxis ? $this->xaxis->toArray($noStream) : $this->xaxis;
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
        if (isset($map['Percent'])) {
            if (!empty($map['Percent'])) {
                $model->percent = [];
                $n1 = 0;
                foreach ($map['Percent'] as $item1) {
                    $model->percent[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n1 = 0;
                foreach ($map['Series'] as $item1) {
                    $model->series[$n1] = series::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            if (!empty($map['Total'])) {
                $model->total = [];
                $n1 = 0;
                foreach ($map['Total'] as $item1) {
                    $model->total[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Xaxis'])) {
            $model->xaxis = xaxis::fromMap($map['Xaxis']);
        }

        return $model;
    }
}
