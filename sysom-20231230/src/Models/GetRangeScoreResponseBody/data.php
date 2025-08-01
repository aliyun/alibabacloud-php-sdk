<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetRangeScoreResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1725797727754
     *
     * @var int
     */
    public $time;

    /**
     * @example saturation
     *
     * @var string
     */
    public $type;

    /**
     * @example 100
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'time' => 'time',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
