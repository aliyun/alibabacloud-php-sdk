<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutRequest\texts;

use AlibabaCloud\Tea\Model;

class fontColor extends Model
{
    /**
     * @example 255
     *
     * @var int
     */
    public $b;

    /**
     * @example 255
     *
     * @var int
     */
    public $g;

    /**
     * @example 255
     *
     * @var int
     */
    public $r;
    protected $_name = [
        'b' => 'B',
        'g' => 'G',
        'r' => 'R',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->b) {
            $res['B'] = $this->b;
        }
        if (null !== $this->g) {
            $res['G'] = $this->g;
        }
        if (null !== $this->r) {
            $res['R'] = $this->r;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fontColor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['B'])) {
            $model->b = $map['B'];
        }
        if (isset($map['G'])) {
            $model->g = $map['G'];
        }
        if (isset($map['R'])) {
            $model->r = $map['R'];
        }

        return $model;
    }
}
