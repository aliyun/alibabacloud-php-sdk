<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The values of data on the x-axis.
     *
     * @example [test1,test2,...]
     *
     * @var string[]
     */
    public $x;

    /**
     * @description The values of data on the y-axis.
     *
     * @example [1,2,3,...]
     *
     * @var string[]
     */
    public $y;

    /**
     * @var string[]
     */
    public $z;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
        'z' => 'Z',
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
        if (null !== $this->z) {
            $res['Z'] = $this->z;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X'])) {
            if (!empty($map['X'])) {
                $model->x = $map['X'];
            }
        }
        if (isset($map['Y'])) {
            if (!empty($map['Y'])) {
                $model->y = $map['Y'];
            }
        }
        if (isset($map['Z'])) {
            if (!empty($map['Z'])) {
                $model->z = $map['Z'];
            }
        }

        return $model;
    }
}
