<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies\constraints;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies\scalingRules;
use AlibabaCloud\Tea\Model;

class scalingPolicies extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The maximum and minimum number of nodes in the node group.
     *
     * @var constraints
     */
    public $constraints;

    /**
     * @description The node group ID.
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The ID of the auto scaling policy.
     *
     * @example asp-asduwe23znl***
     *
     * @var string
     */
    public $scalingPolicyId;

    /**
     * @description The type of the auto scaling policy.
     *
     * @var string
     */
    public $scalingPolicyType;

    /**
     * @description The list of auto scaling rules.
     *
     * @var scalingRules[]
     */
    public $scalingRules;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'constraints'       => 'Constraints',
        'nodeGroupId'       => 'NodeGroupId',
        'scalingPolicyId'   => 'ScalingPolicyId',
        'scalingPolicyType' => 'ScalingPolicyType',
        'scalingRules'      => 'ScalingRules',
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
        if (null !== $this->scalingPolicyType) {
            $res['ScalingPolicyType'] = $this->scalingPolicyType;
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
     * @return scalingPolicies
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
        if (isset($map['ScalingPolicyType'])) {
            $model->scalingPolicyType = $map['ScalingPolicyType'];
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
