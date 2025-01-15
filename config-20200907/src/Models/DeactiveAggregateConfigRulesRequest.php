<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeactiveAggregateConfigRulesRequest extends Model
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
     * For more information about how to obtain the ID of a compliance package, see [ListAggregateCompliancePacks](https://help.aliyun.com/document_detail/262059.html).
     * @example cp-fe416457e0d90022****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The rule ID. Separate multiple rule IDs with commas (,).
     *
     * For more information about how to obtain the ID of a rule, see [ListAggregateConfigRules](https://help.aliyun.com/document_detail/264148.html).
     * @example cr-5772ba41209e007b****
     *
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'aggregatorId'     => 'AggregatorId',
        'compliancePackId' => 'CompliancePackId',
        'configRuleIds'    => 'ConfigRuleIds',
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
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeactiveAggregateConfigRulesRequest
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
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
