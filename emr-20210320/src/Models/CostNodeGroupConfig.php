<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class CostNodeGroupConfig extends Model
{
    /**
     * @var CostInstanceType[]
     */
    public $instanceTypes;

    /**
     * @var int
     */
    public $maximalNodeCount;

    /**
     * @var int
     */
    public $minimalNodeCount;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var string
     */
    public $nodeGroupType;

    /**
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

    public function validate()
    {
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1] = CostInstanceType::fromMap($item1);
                    ++$n1;
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
