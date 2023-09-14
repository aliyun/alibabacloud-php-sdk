<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponseBody\scalingPolicy\constraints;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponseBody\scalingPolicy\scalingRules;
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
     * @description 节点组ID。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 伸缩策略ID。
     *
     * @example asp-asduwe23znl***
     *
     * @var string
     */
    public $scalingPolicyId;

    /**
     * @description 伸缩规则列表
     *
     * @var scalingRules[]
     */
    public $scalingRules;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'constraints'     => 'Constraints',
        'nodeGroupId'     => 'NodeGroupId',
        'scalingPolicyId' => 'ScalingPolicyId',
        'scalingRules'    => 'ScalingRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->constraints) {
            $res['Constraints'] = null !== $this->constraints ? $this->constraints->toMap() : null;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->scalingPolicyId) {
            $res['ScalingPolicyId'] = $this->scalingPolicyId;
        }
        if (null !== $this->scalingRules) {
            $res['ScalingRules'] = [];
            if (null !== $this->scalingRules && \is_array($this->scalingRules)) {
                $n = 0;
                foreach ($this->scalingRules as $item) {
                    $res['ScalingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['ScalingPolicyId'])) {
            $model->scalingPolicyId = $map['ScalingPolicyId'];
        }
        if (isset($map['ScalingRules'])) {
            if (!empty($map['ScalingRules'])) {
                $model->scalingRules = [];
                $n                   = 0;
                foreach ($map['ScalingRules'] as $item) {
                    $model->scalingRules[$n++] = null !== $item ? scalingRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
