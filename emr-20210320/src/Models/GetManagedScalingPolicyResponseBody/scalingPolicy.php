<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetManagedScalingPolicyResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetManagedScalingPolicyResponseBody\scalingPolicy\constraints;
use AlibabaCloud\Tea\Model;

class scalingPolicy extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 最大最小值约束
     *
     * @var constraints
     */
    public $constraints;

    /**
     * @description 伸缩策略ID。
     *
     * @example asp-asduwe23znl***
     *
     * @var string
     */
    public $scalingPolicyId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'constraints' => 'Constraints',
        'scalingPolicyId' => 'ScalingPolicyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->constraints) {
            $res['Constraints'] = null !== $this->constraints ? $this->constraints->toMap() : null;
        }
        if (null !== $this->scalingPolicyId) {
            $res['ScalingPolicyId'] = $this->scalingPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingPolicy
     */
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
