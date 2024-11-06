<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;
use AlibabaCloud\Tea\Model;

class paths extends Model
{
    /**
     * @var cost
     */
    public $cost;

    /**
     * @example 12000
     *
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
     * @example 23435
     *
     * @var string
     */
    public $walkingDistanceMeter;
    protected $_name = [
        'cost'                 => 'cost',
        'distanceMeter'        => 'distanceMeter',
        'nightflag'            => 'nightflag',
        'segments'             => 'segments',
        'walkingDistanceMeter' => 'walkingDistanceMeter',
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
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->nightflag) {
            $res['nightflag'] = $this->nightflag;
        }
        if (null !== $this->segments) {
            $res['segments'] = [];
            if (null !== $this->segments && \is_array($this->segments)) {
                $n = 0;
                foreach ($this->segments as $item) {
                    $res['segments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->walkingDistanceMeter) {
            $res['walkingDistanceMeter'] = $this->walkingDistanceMeter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paths
     */
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
                $n               = 0;
                foreach ($map['segments'] as $item) {
                    $model->segments[$n++] = null !== $item ? segments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['walkingDistanceMeter'])) {
            $model->walkingDistanceMeter = $map['walkingDistanceMeter'];
        }

        return $model;
    }
}
