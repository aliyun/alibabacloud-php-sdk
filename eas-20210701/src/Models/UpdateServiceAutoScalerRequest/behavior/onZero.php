<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest\behavior;

use AlibabaCloud\Tea\Model;

class onZero extends Model
{
    /**
     * @example 600
     *
     * @var int
     */
    public $scaleDownGracePeriodSeconds;

    /**
     * @example 1
     *
     * @var int
     */
    public $scaleUpActivationReplicas;
    protected $_name = [
        'scaleDownGracePeriodSeconds' => 'scaleDownGracePeriodSeconds',
        'scaleUpActivationReplicas'   => 'scaleUpActivationReplicas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scaleDownGracePeriodSeconds) {
            $res['scaleDownGracePeriodSeconds'] = $this->scaleDownGracePeriodSeconds;
        }
        if (null !== $this->scaleUpActivationReplicas) {
            $res['scaleUpActivationReplicas'] = $this->scaleUpActivationReplicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onZero
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scaleDownGracePeriodSeconds'])) {
            $model->scaleDownGracePeriodSeconds = $map['scaleDownGracePeriodSeconds'];
        }
        if (isset($map['scaleUpActivationReplicas'])) {
            $model->scaleUpActivationReplicas = $map['scaleUpActivationReplicas'];
        }

        return $model;
    }
}
