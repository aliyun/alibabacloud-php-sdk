<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeRegionsResponseBody\regions\region;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeRegionsResponseBody\regions\region\zones\zone;

class zones extends Model
{
    /**
     * @var zone[]
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
                $n1          = 0;
                foreach ($this->zone as $item1) {
                    $res['Zone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1          = 0;
                foreach ($map['Zone'] as $item1) {
                    $model->zone[$n1++] = zone::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
