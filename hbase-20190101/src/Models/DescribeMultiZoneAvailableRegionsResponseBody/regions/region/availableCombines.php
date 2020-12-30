<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines\availableCombine;
use AlibabaCloud\Tea\Model;

class availableCombines extends Model
{
    /**
     * @var availableCombine[]
     */
    public $availableCombine;
    protected $_name = [
        'availableCombine' => 'AvailableCombine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableCombine) {
            $res['AvailableCombine'] = [];
            if (null !== $this->availableCombine && \is_array($this->availableCombine)) {
                $n = 0;
                foreach ($this->availableCombine as $item) {
                    $res['AvailableCombine'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableCombines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableCombine'])) {
            if (!empty($map['AvailableCombine'])) {
                $model->availableCombine = [];
                $n                       = 0;
                foreach ($map['AvailableCombine'] as $item) {
                    $model->availableCombine[$n++] = null !== $item ? availableCombine::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
