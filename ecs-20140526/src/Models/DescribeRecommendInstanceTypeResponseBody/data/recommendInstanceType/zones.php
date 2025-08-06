<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones\zone;

class zones extends Model
{
    /**
     * @var zone[]
     */
    public $zone;
    protected $_name = [
        'zone' => 'zone',
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
                $res['zone'] = [];
                $n1 = 0;
                foreach ($this->zone as $item1) {
                    $res['zone'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['zone'])) {
            if (!empty($map['zone'])) {
                $model->zone = [];
                $n1 = 0;
                foreach ($map['zone'] as $item1) {
                    $model->zone[$n1] = zone::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
