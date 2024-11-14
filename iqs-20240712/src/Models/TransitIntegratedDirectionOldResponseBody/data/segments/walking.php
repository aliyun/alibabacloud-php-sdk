<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\walking\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\walking\steps;
use AlibabaCloud\Tea\Model;

class walking extends Model
{
    /**
     * @var cost
     */
    public $cost;

    /**
     * @example 116.468208,39.998875
     *
     * @var string
     */
    public $destination;

    /**
     * @example 2000
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 116.466568,39.995552
     *
     * @var string
     */
    public $origin;

    /**
     * @var steps[]
     */
    public $steps;
    protected $_name = [
        'cost'          => 'cost',
        'destination'   => 'destination',
        'distanceMeter' => 'distanceMeter',
        'origin'        => 'origin',
        'steps'         => 'steps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = null !== $this->cost ? $this->cost->toMap() : null;
        }
        if (null !== $this->destination) {
            $res['destination'] = $this->destination;
        }
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }
        if (null !== $this->steps) {
            $res['steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['steps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return walking
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost'])) {
            $model->cost = cost::fromMap($map['cost']);
        }
        if (isset($map['destination'])) {
            $model->destination = $map['destination'];
        }
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }
        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n            = 0;
                foreach ($map['steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
