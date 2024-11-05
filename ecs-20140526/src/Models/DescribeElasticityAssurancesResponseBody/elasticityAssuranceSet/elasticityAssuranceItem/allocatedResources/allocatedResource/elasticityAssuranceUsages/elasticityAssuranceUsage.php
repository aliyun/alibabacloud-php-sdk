<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources\allocatedResource\elasticityAssuranceUsages;

use AlibabaCloud\Tea\Model;

class elasticityAssuranceUsage extends Model
{
    /**
     * @example 1144775968548340
     *
     * @var string
     */
    public $accountId;

    /**
     * @example name
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $usedAmount;
    protected $_name = [
        'accountId'   => 'AccountId',
        'serviceName' => 'ServiceName',
        'usedAmount'  => 'UsedAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticityAssuranceUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }

        return $model;
    }
}
