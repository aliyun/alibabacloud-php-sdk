<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\behavior;

use AlibabaCloud\Tea\Model;

class onZero extends Model
{
    /**
     * @description The time window that is required before the number of instances is reduced to 0. The number of instances can be reduced to 0 only if no request is available or no traffic exists in the specified time window. Default value: 600.
     *
     * @example 600
     *
     * @var int
     */
    public $scaleDownGracePeriodSeconds;

    /**
     * @description The number of instances that you want to create at a time if the number of instances is 0. Default value: 1.
     *
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
