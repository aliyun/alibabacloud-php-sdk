<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisOverallDataResponseBody\metricData;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description 拓展属性，ratio：单位时间内异常用户占比，totalCount：单位时间内用户总数
     *
     * @var mixed[]
     */
    public $ext;

    /**
     * @description x轴横坐标，秒级时间戳
     *
     * @var string
     */
    public $x;

    /**
     * @description y轴横坐标，单位数据异常用户数
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
