<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataResponseBody\pubMetrics;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description 发布端指标趋势图中x轴横坐标。
     *
     * @var string
     */
    public $x;

    /**
     * @description 发布端指标趋势图中y轴纵坐标。
     *
     * @var string
     */
    public $y;

    /**
     * @description 拓展属性
     *
     * @var mixed[]
     */
    public $ext;
    protected $_name = [
        'x'   => 'X',
        'y'   => 'Y',
        'ext' => 'Ext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }

        return $model;
    }
}
