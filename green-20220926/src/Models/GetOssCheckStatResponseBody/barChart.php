<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatResponseBody;

use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatResponseBody\barChart\y;
use AlibabaCloud\Tea\Model;

class barChart extends Model
{
    /**
     * @var string[]
     */
    public $x;

    /**
     * @var y[]
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
            $res['Y'] = [];
            if (null !== $this->y && \is_array($this->y)) {
                $n = 0;
                foreach ($this->y as $item) {
                    $res['Y'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return barChart
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
                $model->y = [];
                $n        = 0;
                foreach ($map['Y'] as $item) {
                    $model->y[$n++] = null !== $item ? y::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
