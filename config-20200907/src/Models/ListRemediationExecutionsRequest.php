<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListRemediationExecutionsRequest extends Model
{
    /**
     * @example cr-5392626622af0000****
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
     * @example aVCjqNaSy0Ps7zSMGu25****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'configRuleId'    => 'ConfigRuleId',
        'executionStatus' => 'ExecutionStatus',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemediationExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
