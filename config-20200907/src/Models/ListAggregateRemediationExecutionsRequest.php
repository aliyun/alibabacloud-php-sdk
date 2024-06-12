<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateRemediationExecutionsRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-edd3626622af00b3****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The rule ID.
     *
     * This parameter is required.
     * @example cr-2792626622af0c21****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The status of the remediation. Valid values:
     *
     *   Success
     *   Failed
     *
     * @example Success
     *
     * @var string
     */
    public $executionStatus;

    /**
     * @description The maximum number of entries to return for a single request. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example aVCjqFaSy0Ps6zSMGw09****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the member account in the account group.
     *
     * @example 126672004088****
     *
     * @var int
     */
    public $resourceAccountId;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'configRuleId'      => 'ConfigRuleId',
        'executionStatus'   => 'ExecutionStatus',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'resourceAccountId' => 'ResourceAccountId',
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
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateRemediationExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }

        return $model;
    }
}
