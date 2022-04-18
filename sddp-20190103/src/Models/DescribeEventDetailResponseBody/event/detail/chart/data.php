<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $x;

    /**
     * @var string[]
     */
    public $y;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
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

        return $model;
    }
}
