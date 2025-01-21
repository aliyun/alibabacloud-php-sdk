<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\behavior;

use AlibabaCloud\Dara\Model;

class onZero extends Model
{
    /**
     * @var int
     */
    public $scaleDownGracePeriodSeconds;
    /**
     * @var int
     */
    public $scaleUpActivationReplicas;
    protected $_name = [
        'scaleDownGracePeriodSeconds' => 'scaleDownGracePeriodSeconds',
        'scaleUpActivationReplicas'   => 'scaleUpActivationReplicas',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
