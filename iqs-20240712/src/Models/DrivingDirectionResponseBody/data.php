<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\DrivingDirectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\DrivingDirectionResponseBody\data\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\DrivingDirectionResponseBody\data\steps;

class data extends Model
{
    /**
     * @var cost
     */
    public $cost;

    /**
     * @var string
     */
    public $distanceMeter;

    /**
     * @var string
     */
    public $restriction;

    /**
     * @var steps[]
     */
    public $steps;
    protected $_name = [
        'cost' => 'cost',
        'distanceMeter' => 'distanceMeter',
        'restriction' => 'restriction',
        'steps' => 'steps',
    ];

    public function validate()
    {
        if (null !== $this->cost) {
            $this->cost->validate();
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = null !== $this->cost ? $this->cost->toArray($noStream) : $this->cost;
        }

        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }

        if (null !== $this->restriction) {
            $res['restriction'] = $this->restriction;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['steps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['cost'])) {
            $model->cost = cost::fromMap($map['cost']);
        }

        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }

        if (isset($map['restriction'])) {
            $model->restriction = $map['restriction'];
        }

        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['steps'] as $item1) {
                    $model->steps[$n1++] = steps::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
