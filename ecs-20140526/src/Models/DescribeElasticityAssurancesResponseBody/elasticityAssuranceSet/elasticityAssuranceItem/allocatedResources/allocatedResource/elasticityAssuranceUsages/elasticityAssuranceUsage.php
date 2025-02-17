<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources\allocatedResource\elasticityAssuranceUsages;

use AlibabaCloud\Dara\Model;

class elasticityAssuranceUsage extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $serviceName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
