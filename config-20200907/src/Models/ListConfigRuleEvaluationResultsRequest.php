<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class ListConfigRuleEvaluationResultsRequest extends Model
{
    /**
     * @var string
     */
    public $compliancePackId;
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
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regions;
    /**
     * @var string
     */
    public $resourceGroupIds;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
