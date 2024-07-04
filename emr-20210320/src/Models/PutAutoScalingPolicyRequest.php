<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class PutAutoScalingPolicyRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The maximum and minimum numbers of nodes in a node group.
     *
     * @var ScalingConstraints
     */
    public $constraints;

    /**
     * @description 节点组ID。节点组 Id-针对 ACK 集群，此字段为空。
     *
     * This parameter is required.
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 区域ID。
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The auto scaling rules. Number of elements in the array: 0 to 100.
     *
     * @var ScalingRule[]
     */
    public $scalingRules;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'constraints'  => 'Constraints',
        'nodeGroupId'  => 'NodeGroupId',
        'regionId'     => 'RegionId',
        'scalingRules' => 'ScalingRules',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return PutAutoScalingPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Constraints'])) {
            $model->constraints = ScalingConstraints::fromMap($map['Constraints']);
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScalingRules'])) {
            if (!empty($map['ScalingRules'])) {
                $model->scalingRules = [];
                $n                   = 0;
                foreach ($map['ScalingRules'] as $item) {
                    $model->scalingRules[$n++] = null !== $item ? ScalingRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
