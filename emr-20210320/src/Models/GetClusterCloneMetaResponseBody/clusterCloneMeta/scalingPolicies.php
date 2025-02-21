<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies\constraints;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies\scalingRules;

class scalingPolicies extends Model
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
    public $nodeGroupId;
    /**
     * @var string
     */
    public $nodeGroupName;
    /**
     * @var string
     */
    public $scalingPolicyId;
    /**
     * @var string
     */
    public $scalingPolicyType;
    /**
     * @var scalingRules[]
     */
    public $scalingRules;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'constraints'       => 'Constraints',
        'nodeGroupId'       => 'NodeGroupId',
        'nodeGroupName'     => 'NodeGroupName',
        'scalingPolicyId'   => 'ScalingPolicyId',
        'scalingPolicyType' => 'ScalingPolicyType',
        'scalingRules'      => 'ScalingRules',
    ];

    public function validate()
    {
        if (null !== $this->constraints) {
            $this->constraints->validate();
        }
        if (\is_array($this->scalingRules)) {
            Model::validateArray($this->scalingRules);
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

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->scalingPolicyId) {
            $res['ScalingPolicyId'] = $this->scalingPolicyId;
        }

        if (null !== $this->scalingPolicyType) {
            $res['ScalingPolicyType'] = $this->scalingPolicyType;
        }

        if (null !== $this->scalingRules) {
            if (\is_array($this->scalingRules)) {
                $res['ScalingRules'] = [];
                $n1                  = 0;
                foreach ($this->scalingRules as $item1) {
                    $res['ScalingRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
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
                $n1                  = 0;
                foreach ($map['ScalingRules'] as $item1) {
                    $model->scalingRules[$n1++] = scalingRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
