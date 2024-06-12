<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateResourceComplianceByConfigRuleRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-a4e5626622af0079****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The compliance evaluation result of the resources. Valid values:
     *
     *   COMPLIANT: The resource is evaluated as compliant.
     *   NON_COMPLIANT: The resource is evaluated as incompliant.
     *   NOT_APPLICABLE: The rule does not apply to your resources.
     *   INSUFFICIENT_DATA: No resource data is available.
     *
     * @example COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example cr-d369626622af008e****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resources in the account group belong.
     *
     * > You can use either the ResourceAccountId or ResourceOwnerId parameter. We recommend that you use the ResourceAccountId parameter.
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @deprecated
     *
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'complianceType'    => 'ComplianceType',
        'configRuleId'      => 'ConfigRuleId',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceOwnerId'   => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetAggregateResourceComplianceByConfigRuleRequest
     */
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
