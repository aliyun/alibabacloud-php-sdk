<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody\data\records;

use AlibabaCloud\Tea\Model;

class statsDataDo extends Model
{
    /**
     * @description The X axis. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1570852800000
     *
     * @var int
     */
    public $x;

    /**
     * @description The Y axis. This parameter indicates the TPS for message publishing or the number of messages that are published.
     *
     * @example 0
     *
     * @var float
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
     * @return statsDataDo
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

        return $model;
    }
}
