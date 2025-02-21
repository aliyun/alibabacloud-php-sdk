<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ScalingConstraints extends Model
{
    /**
     * @var int
     */
    public $maxCapacity;
    /**
     * @var int
     */
    public $minCapacity;
    protected $_name = [
        'maxCapacity' => 'MaxCapacity',
        'minCapacity' => 'MinCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }

        if (null !== $this->minCapacity) {
            $res['MinCapacity'] = $this->minCapacity;
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
        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }

        if (isset($map['MinCapacity'])) {
            $model->minCapacity = $map['MinCapacity'];
        }

        return $model;
    }
}
