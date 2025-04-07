<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;

class paths extends Model
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
    public $nightflag;

    /**
     * @var segments[]
     */
    public $segments;

    /**
     * @var string
     */
    public $walkingDistanceMeter;
    protected $_name = [
        'cost' => 'cost',
        'distanceMeter' => 'distanceMeter',
        'nightflag' => 'nightflag',
        'segments' => 'segments',
        'walkingDistanceMeter' => 'walkingDistanceMeter',
    ];

    public function validate()
    {
        if (null !== $this->cost) {
            $this->cost->validate();
        }
        if (\is_array($this->segments)) {
            Model::validateArray($this->segments);
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

        if (null !== $this->nightflag) {
            $res['nightflag'] = $this->nightflag;
        }

        if (null !== $this->segments) {
            if (\is_array($this->segments)) {
                $res['segments'] = [];
                $n1 = 0;
                foreach ($this->segments as $item1) {
                    $res['segments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->walkingDistanceMeter) {
            $res['walkingDistanceMeter'] = $this->walkingDistanceMeter;
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

        if (isset($map['nightflag'])) {
            $model->nightflag = $map['nightflag'];
        }

        if (isset($map['segments'])) {
            if (!empty($map['segments'])) {
                $model->segments = [];
                $n1 = 0;
                foreach ($map['segments'] as $item1) {
                    $model->segments[$n1++] = segments::fromMap($item1);
                }
            }
        }

        if (isset($map['walkingDistanceMeter'])) {
            $model->walkingDistanceMeter = $map['walkingDistanceMeter'];
        }

        return $model;
    }
}
