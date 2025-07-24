<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CostNodeGroupConfig extends Model
{
    /**
     * @description 实例类型列表。
     *
     * @var CostInstanceType[]
     */
    public $instanceTypes;

    /**
     * @description 最大节点数限制。
     *
     * @example 100
     *
     * @var int
     */
    public $maximalNodeCount;

    /**
     * @description 最小节点数限制。
     *
     * @example 0
     *
     * @var int
     */
    public $minimalNodeCount;

    /**
     * @description 节点数。
     *
     * @example 1
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description 节点组类型。取值范围：
     * - MASTER：管理类型节点组。
     * - CORE：存储类型节点组。
     * - TASK：计算类型节点组。
     *
     * @example CORE
     *
     * @var string
     */
    public $nodeGroupType;

    /**
     * @description 付费类型。
     *
     * @var string
     */
    public $paymentType;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'maximalNodeCount' => 'MaximalNodeCount',
        'minimalNodeCount' => 'MinimalNodeCount',
        'nodeCount' => 'NodeCount',
        'nodeGroupName' => 'NodeGroupName',
        'nodeGroupType' => 'NodeGroupType',
        'paymentType' => 'PaymentType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = [];
            if (null !== $this->instanceTypes && \is_array($this->instanceTypes)) {
                $n = 0;
                foreach ($this->instanceTypes as $item) {
                    $res['InstanceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maximalNodeCount) {
            $res['MaximalNodeCount'] = $this->maximalNodeCount;
        }
        if (null !== $this->minimalNodeCount) {
            $res['MinimalNodeCount'] = $this->minimalNodeCount;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodeGroupType) {
            $res['NodeGroupType'] = $this->nodeGroupType;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CostNodeGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n = 0;
                foreach ($map['InstanceTypes'] as $item) {
                    $model->instanceTypes[$n++] = null !== $item ? CostInstanceType::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaximalNodeCount'])) {
            $model->maximalNodeCount = $map['MaximalNodeCount'];
        }
        if (isset($map['MinimalNodeCount'])) {
            $model->minimalNodeCount = $map['MinimalNodeCount'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['NodeGroupType'])) {
            $model->nodeGroupType = $map['NodeGroupType'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        return $model;
    }
}
