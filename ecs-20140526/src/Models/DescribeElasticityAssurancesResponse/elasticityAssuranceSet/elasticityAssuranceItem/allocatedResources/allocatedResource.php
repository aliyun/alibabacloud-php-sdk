<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponse\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources;

use AlibabaCloud\Tea\Model;

class allocatedResource extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $totalAmount;

    /**
     * @var int
     */
    public $usedAmount;
    protected $_name = [
        'zoneId'       => 'zoneId',
        'instanceType' => 'InstanceType',
        'totalAmount'  => 'TotalAmount',
        'usedAmount'   => 'UsedAmount',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('totalAmount', $this->totalAmount, true);
        Model::validateRequired('usedAmount', $this->usedAmount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allocatedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }

        return $model;
    }
}
