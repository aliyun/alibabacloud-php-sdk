<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListConfigRuleEvaluationResultsRequest extends Model
{
    /**
     * @description The ID of the compliance package.
     *
     * For more information about how to obtain the ID of a compliance package, see [ListCompliancePacks](https://help.aliyun.com/document_detail/263332.html).
     * @example cp-f1e3326622af00cb****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The compliance evaluation result of the resource. Valid values:
     *
     *   COMPLIANT: The resources are evaluated as compliant.
     *   NON_COMPLIANT: The resources are evaluated as non-compliant.
     *   NOT_APPLICABLE: The rule does not apply to the resources.
     *   INSUFFICIENT_DATA: No data is available.
     *   IGNORED: The resource is ignored during compliance evaluation.
     *
     * @example NON_COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The rule ID.
     *
     * You can call the [ListConfigRules](https://help.aliyun.com/document_detail/169607.html) operation to obtain the rule ID.
     * @example cr-cac56457e0d900d3****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The maximum number of entries to return for a single request. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of `NextToken`.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the resources that you want to evaluate reside. Separate multiple region IDs with commas (,).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regions;

    /**
     * @description The ID of the resource group to which the resources that you want to evaluate belong. Separate multiple resource group IDs with commas (,).
     *
     * @example rg-aek2indxn3g****
     *
     * @var string
     */
    public $resourceGroupIds;

    /**
     * @description The type of the resources that you want to evaluate. Separate multiple resource types with commas (,).
     *
     * @example ACS::ECS::Instane
     *
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'complianceType'   => 'ComplianceType',
        'configRuleId'     => 'ConfigRuleId',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'regions'          => 'Regions',
        'resourceGroupIds' => 'ResourceGroupIds',
        'resourceTypes'    => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigRuleEvaluationResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Regions'])) {
            $model->regions = $map['Regions'];
        }
        if (isset($map['ResourceGroupIds'])) {
            $model->resourceGroupIds = $map['ResourceGroupIds'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
