<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines\availableCombine;

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
        if (\is_array($this->availableCombine)) {
            Model::validateArray($this->availableCombine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableCombine) {
            if (\is_array($this->availableCombine)) {
                $res['AvailableCombine'] = [];
                $n1 = 0;
                foreach ($this->availableCombine as $item1) {
                    $res['AvailableCombine'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableCombine'])) {
            if (!empty($map['AvailableCombine'])) {
                $model->availableCombine = [];
                $n1 = 0;
                foreach ($map['AvailableCombine'] as $item1) {
                    $model->availableCombine[$n1] = availableCombine::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
