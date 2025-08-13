<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionNumLineChartResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionNumLineChartResponseBody\resultObject\series;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionNumLineChartResponseBody\resultObject\xaxis;

class resultObject extends Model
{
    /**
     * @var series[]
     */
    public $series;

    /**
     * @var xaxis
     */
    public $xaxis;
    protected $_name = [
        'series' => 'series',
        'xaxis' => 'xaxis',
    ];

    public function validate()
    {
        if (\is_array($this->series)) {
            Model::validateArray($this->series);
        }
        if (null !== $this->xaxis) {
            $this->xaxis->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->xaxis) {
            $res['xaxis'] = null !== $this->xaxis ? $this->xaxis->toArray($noStream) : $this->xaxis;
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

        if (isset($map['xaxis'])) {
            $model->xaxis = xaxis::fromMap($map['xaxis']);
        }

        return $model;
    }
}
