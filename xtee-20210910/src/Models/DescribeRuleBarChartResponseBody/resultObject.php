<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartResponseBody\resultObject\series;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartResponseBody\resultObject\yaxis;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var series[]
     */
    public $series;

    /**
     * @var yaxis
     */
    public $yaxis;
    protected $_name = [
        'series' => 'series',
        'yaxis'  => 'yaxis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->series) {
            $res['series'] = [];
            if (null !== $this->series && \is_array($this->series)) {
                $n = 0;
                foreach ($this->series as $item) {
                    $res['series'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->yaxis) {
            $res['yaxis'] = null !== $this->yaxis ? $this->yaxis->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['series'])) {
            if (!empty($map['series'])) {
                $model->series = [];
                $n             = 0;
                foreach ($map['series'] as $item) {
                    $model->series[$n++] = null !== $item ? series::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['yaxis'])) {
            $model->yaxis = yaxis::fromMap($map['yaxis']);
        }

        return $model;
    }
}
