<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTemplateResponseBody\template\video;

use AlibabaCloud\Tea\Model;

class bitrateBnd extends Model
{
    /**
     * @description The lower limit of the total bitrate. Unit: Kbit/s.
     *
     * @example 500
     *
     * @var string
     */
    public $max;

    /**
     * @description The pixel format. Valid values: standard pixel formats such as yuv420p and yuvj420p.
     *
     * @example 100
     *
     * @var string
     */
    public $min;
    protected $_name = [
        'max' => 'Max',
        'min' => 'Min',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bitrateBnd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        return $model;
    }
}
