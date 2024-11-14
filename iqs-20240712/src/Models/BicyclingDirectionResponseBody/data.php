<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\BicyclingDirectionResponseBody;

use AlibabaCloud\SDK\IQS\V20240712\Models\BicyclingDirectionResponseBody\data\steps;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 445
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 38434
     *
     * @var string
     */
    public $durationSecond;

    /**
     * @var steps[]
     */
    public $steps;
    protected $_name = [
        'distanceMeter'  => 'distanceMeter',
        'durationSecond' => 'durationSecond',
        'steps'          => 'steps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->durationSecond) {
            $res['durationSecond'] = $this->durationSecond;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['durationSecond'])) {
            $model->durationSecond = $map['durationSecond'];
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
