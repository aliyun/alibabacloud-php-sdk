<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataResponseBody\pubMetrics;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @example 1548670257
     *
     * @var string
     */
    public $x;

    /**
     * @example 230100
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
