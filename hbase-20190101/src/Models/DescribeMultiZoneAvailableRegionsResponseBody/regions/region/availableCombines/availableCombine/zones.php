<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines\availableCombine;

use AlibabaCloud\Dara\Model;

class zones extends Model
{
    /**
     * @var string[]
     */
    public $zone;
    protected $_name = [
        'zone' => 'Zone',
    ];

    public function validate()
    {
        if (\is_array($this->zone)) {
            Model::validateArray($this->zone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zone) {
            if (\is_array($this->zone)) {
                $res['Zone'] = [];
                $n1 = 0;
                foreach ($this->zone as $item1) {
                    $res['Zone'][$n1] = $item1;
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
        if (isset($map['Zone'])) {
            if (!empty($map['Zone'])) {
                $model->zone = [];
                $n1 = 0;
                foreach ($map['Zone'] as $item1) {
                    $model->zone[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
