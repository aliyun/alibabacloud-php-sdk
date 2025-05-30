<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class GetAggregateResourceComplianceByConfigRuleRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $complianceType;

    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var int
     */
    public $resourceAccountId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'complianceType' => 'ComplianceType',
        'configRuleId' => 'ConfigRuleId',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }

        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }

        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }

        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
