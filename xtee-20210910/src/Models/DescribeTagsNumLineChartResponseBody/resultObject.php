<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsNumLineChartResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsNumLineChartResponseBody\resultObject\series;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsNumLineChartResponseBody\resultObject\xaxis;
use AlibabaCloud\Tea\Model;

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
        'xaxis'  => 'xaxis',
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
        if (null !== $this->xaxis) {
            $res['xaxis'] = null !== $this->xaxis ? $this->xaxis->toMap() : null;
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
        if (isset($map['xaxis'])) {
            $model->xaxis = xaxis::fromMap($map['xaxis']);
        }

        return $model;
    }
}
