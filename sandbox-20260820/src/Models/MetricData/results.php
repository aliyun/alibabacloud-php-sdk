<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\MetricData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\MetricData\results\series;

class results extends Model
{
    /**
     * @var string
     */
    public $metricName;

    /**
     * @var series[]
     */
    public $series;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'metricName' => 'metricName',
        'series' => 'series',
        'unit' => 'unit',
    ];

    public function validate()
    {
        if (\is_array($this->series)) {
            Model::validateArray($this->series);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
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

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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
        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
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

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
