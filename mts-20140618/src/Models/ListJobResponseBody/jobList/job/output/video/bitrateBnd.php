<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\video;

use AlibabaCloud\Tea\Model;

class bitrateBnd extends Model
{
    /**
     * @description The maximum bitrate. Unit: Kbit/s.
     *
     * @example 1000
     *
     * @var string
     */
    public $max;

    /**
     * @description The minimum bitrate. Unit: Kbit/s.
     *
     * @example 200
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
