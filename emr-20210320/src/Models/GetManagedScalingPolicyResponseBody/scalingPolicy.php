<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetManagedScalingPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetManagedScalingPolicyResponseBody\scalingPolicy\constraints;

class scalingPolicy extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var constraints
     */
    public $constraints;

    /**
     * @var string
     */
    public $scalingPolicyId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'constraints' => 'Constraints',
        'scalingPolicyId' => 'ScalingPolicyId',
    ];

    public function validate()
    {
        if (null !== $this->constraints) {
            $this->constraints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->constraints) {
            $res['Constraints'] = null !== $this->constraints ? $this->constraints->toArray($noStream) : $this->constraints;
        }

        if (null !== $this->scalingPolicyId) {
            $res['ScalingPolicyId'] = $this->scalingPolicyId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Constraints'])) {
            $model->constraints = constraints::fromMap($map['Constraints']);
        }

        if (isset($map['ScalingPolicyId'])) {
            $model->scalingPolicyId = $map['ScalingPolicyId'];
        }

        return $model;
    }
}
