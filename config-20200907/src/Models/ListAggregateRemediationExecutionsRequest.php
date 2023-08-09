<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateRemediationExecutionsRequest extends Model
{
    /**
     * @example ca-edd3626622af00b3****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @example cr-2792626622af0c21****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @example Success
     *
     * @var string
     */
    public $executionStatus;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example aVCjqFaSy0Ps6zSMGw09****
     *
     * @var string
     */
    public $nextToken;

    /**
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
