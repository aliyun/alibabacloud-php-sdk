<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponseBody\compliancePacksResult;

use AlibabaCloud\Tea\Model;

class compliancePacks extends Model
{
    /**
     * @description The ID of the management account to which the compliance package belongs.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The ID of the account group.
     *
     * @example ca-f632626622af0079****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the compliance package.
     *
     * @example cp-fdc8626622af00f9****
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
     * @description The ID of the compliance package template.
     *
     * @example ct-5f26ff4e06a300c4****
     *
     * @var string
     */
    public $compliancePackTemplateId;

    /**
     * @description The timestamp when the compliance package was created. Unit: milliseconds.
     *
     * @example 1624243657000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The description of the compliance package.
     *
     * @var string
     */
    public $description;

    /**
     * @description The risk level of the resources that are not compliant with the managed rules in the compliance package. Valid values:
     *
     *   1: high risk level.
     *   2: medium risk level.
     *   3: low risk level.
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The status of the compliance package. Valid values:
     *
     *   ACTIVE: The compliance package is available for use.
     *   CREATING: The compliance package is being created.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'                => 'AccountId',
        'aggregatorId'             => 'AggregatorId',
        'compliancePackId'         => 'CompliancePackId',
        'compliancePackName'       => 'CompliancePackName',
        'compliancePackTemplateId' => 'CompliancePackTemplateId',
        'createTimestamp'          => 'CreateTimestamp',
        'description'              => 'Description',
        'riskLevel'                => 'RiskLevel',
        'status'                   => 'Status',
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
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compliancePacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }
        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
