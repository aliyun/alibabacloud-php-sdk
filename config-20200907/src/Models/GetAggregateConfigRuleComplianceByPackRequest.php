<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateConfigRuleComplianceByPackRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-04b3fd170e340007****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the compliance package.
     *
     * This parameter is required.
     * @example cp-541e626622af0087****
     *
     * @var string
     */
    public $compliancePackId;
    protected $_name = [
        'aggregatorId'     => 'AggregatorId',
        'compliancePackId' => 'CompliancePackId',
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
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateConfigRuleComplianceByPackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }

        return $model;
    }
}
