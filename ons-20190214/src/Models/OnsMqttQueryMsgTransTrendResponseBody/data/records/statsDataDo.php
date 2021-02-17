<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryMsgTransTrendResponseBody\data\records;

use AlibabaCloud\Tea\Model;

class statsDataDo extends Model
{
    /**
     * @var float
     */
    public $y;

    /**
     * @var int
     */
    public $x;
    protected $_name = [
        'y' => 'Y',
        'x' => 'X',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statsDataDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        return $model;
    }
}
