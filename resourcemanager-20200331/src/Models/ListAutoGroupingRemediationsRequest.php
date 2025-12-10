<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class ListAutoGroupingRemediationsRequest extends Model
{
    /**
     * @var string
     */
    public $earliestRemediationTime;

    /**
     * @var string
     */
    public $latestRemediationTime;

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
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $targetResourceGroupId;
    protected $_name = [
        'earliestRemediationTime' => 'EarliestRemediationTime',
        'latestRemediationTime' => 'LatestRemediationTime',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'ruleId' => 'RuleId',
        'service' => 'Service',
        'targetResourceGroupId' => 'TargetResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->earliestRemediationTime) {
            $res['EarliestRemediationTime'] = $this->earliestRemediationTime;
        }

        if (null !== $this->latestRemediationTime) {
            $res['LatestRemediationTime'] = $this->latestRemediationTime;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->targetResourceGroupId) {
            $res['TargetResourceGroupId'] = $this->targetResourceGroupId;
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
        if (isset($map['EarliestRemediationTime'])) {
            $model->earliestRemediationTime = $map['EarliestRemediationTime'];
        }

        if (isset($map['LatestRemediationTime'])) {
            $model->latestRemediationTime = $map['LatestRemediationTime'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['TargetResourceGroupId'])) {
            $model->targetResourceGroupId = $map['TargetResourceGroupId'];
        }

        return $model;
    }
}
