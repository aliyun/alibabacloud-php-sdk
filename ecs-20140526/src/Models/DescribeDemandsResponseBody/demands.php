<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand;

class demands extends Model
{
    /**
     * @var demand[]
     */
    public $demand;
    protected $_name = [
        'demand' => 'Demand',
    ];

    public function validate()
    {
        if (\is_array($this->demand)) {
            Model::validateArray($this->demand);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->demand) {
            if (\is_array($this->demand)) {
                $res['Demand'] = [];
                $n1            = 0;
                foreach ($this->demand as $item1) {
                    $res['Demand'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Demand'])) {
            if (!empty($map['Demand'])) {
                $model->demand = [];
                $n1            = 0;
                foreach ($map['Demand'] as $item1) {
                    $model->demand[$n1++] = demand::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
