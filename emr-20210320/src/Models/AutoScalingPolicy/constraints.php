<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\AutoScalingPolicy;

use AlibabaCloud\Tea\Model;

class constraints extends Model
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
        'maxCapacity' => 'maxCapacity',
        'minCapacity' => 'minCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCapacity) {
            $res['maxCapacity'] = $this->maxCapacity;
        }
        if (null !== $this->minCapacity) {
            $res['minCapacity'] = $this->minCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return constraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxCapacity'])) {
            $model->maxCapacity = $map['maxCapacity'];
        }
        if (isset($map['minCapacity'])) {
            $model->minCapacity = $map['minCapacity'];
        }

        return $model;
    }
}
