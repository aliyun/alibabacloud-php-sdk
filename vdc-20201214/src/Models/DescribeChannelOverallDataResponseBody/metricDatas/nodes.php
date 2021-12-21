<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody\metricDatas;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description 扩展数据
     *
     * @var mixed[]
     */
    public $ext;

    /**
     * @description 指标趋势图中x轴横坐标。
     *
     * @var string
     */
    public $x;

    /**
     * @description 指标趋势图中y轴纵坐标。
     *
     * @var string
     */
    public $y;
    protected $_name = [
        'ext' => 'Ext',
        'x'   => 'X',
        'y'   => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
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
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
