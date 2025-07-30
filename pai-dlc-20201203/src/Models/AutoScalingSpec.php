<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class AutoScalingSpec extends Model
{
    /**
     * @var string
     */
    public $scalingStrategy;
    protected $_name = [
        'scalingStrategy' => 'ScalingStrategy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingStrategy) {
            $res['ScalingStrategy'] = $this->scalingStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AutoScalingSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingStrategy'])) {
            $model->scalingStrategy = $map['ScalingStrategy'];
        }

        return $model;
    }
}
