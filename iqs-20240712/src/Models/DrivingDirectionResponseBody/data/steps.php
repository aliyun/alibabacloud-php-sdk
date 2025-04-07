<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\DrivingDirectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\DrivingDirectionResponseBody\data\steps\cost;

class steps extends Model
{
    /**
     * @var cost
     */
    public $cost;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $orientation;

    /**
     * @var string
     */
    public $roadName;

    /**
     * @var string
     */
    public $stepDistanceMeter;
    protected $_name = [
        'cost' => 'cost',
        'instruction' => 'instruction',
        'orientation' => 'orientation',
        'roadName' => 'roadName',
        'stepDistanceMeter' => 'stepDistanceMeter',
    ];

    public function validate()
    {
        if (null !== $this->cost) {
            $this->cost->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = null !== $this->cost ? $this->cost->toArray($noStream) : $this->cost;
        }

        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }

        if (null !== $this->orientation) {
            $res['orientation'] = $this->orientation;
        }

        if (null !== $this->roadName) {
            $res['roadName'] = $this->roadName;
        }

        if (null !== $this->stepDistanceMeter) {
            $res['stepDistanceMeter'] = $this->stepDistanceMeter;
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

        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }

        if (isset($map['orientation'])) {
            $model->orientation = $map['orientation'];
        }

        if (isset($map['roadName'])) {
            $model->roadName = $map['roadName'];
        }

        if (isset($map['stepDistanceMeter'])) {
            $model->stepDistanceMeter = $map['stepDistanceMeter'];
        }

        return $model;
    }
}
