<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskIPCity;

use AlibabaCloud\Tea\Model;

class grid extends Model
{
    /**
     * @var bool
     */
    public $show;
    protected $_name = [
        'show' => 'show',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->show) {
            $res['show'] = $this->show;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grid
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['show'])) {
            $model->show = $map['show'];
        }

        return $model;
    }
}
