<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule;

use AlibabaCloud\Tea\Model;

class createBy extends Model
{
    /**
     * @description The ID of the account group.
     *
     * @example ca-04b3fd170e340007****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The name of the account group.
     *
     * @example Test_Group
     *
     * @var string
     */
    public $aggregatorName;

    /**
     * @description The ID of the compliance package.
     *
     * @example cp-541e626622af008****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The name of the compliance package.
     *
     * @var string
     */
    public $compliancePackName;

    /**
     * @description The ID of the account that was used to create the rule.
     *
     * @example 100931896542****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The name of the account that was used to create the rule.
     *
     * @example Alice
     *
     * @var string
     */
    public $creatorName;

    /**
     * @description The type of the entity to which the rule belongs. The value is fixed to `AGGREGATOR`, which indicates an account group.
     *
     * @example AGGREGATOR
     *
     * @var string
     */
    public $creatorType;
    protected $_name = [
        'aggregatorId'       => 'AggregatorId',
        'aggregatorName'     => 'AggregatorName',
        'compliancePackId'   => 'CompliancePackId',
        'compliancePackName' => 'CompliancePackName',
        'creatorId'          => 'CreatorId',
        'creatorName'        => 'CreatorName',
        'creatorType'        => 'CreatorType',
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
        if (null !== $this->aggregatorName) {
            $res['AggregatorName'] = $this->aggregatorName;
        }
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createBy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['AggregatorName'])) {
            $model->aggregatorName = $map['AggregatorName'];
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }

        return $model;
    }
}
