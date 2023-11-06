<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationExecutionsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationExecutionsResponseBody\remediationExecutionData\remediationExecutions;
use AlibabaCloud\Tea\Model;

class remediationExecutionData extends Model
{
    /**
     * @description The maximum number of entries returned for a single request.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example cNclqNaKs0Ds7zSNip0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The queried remediation records.
     *
     * @var remediationExecutions[]
     */
    public $remediationExecutions;
    protected $_name = [
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'remediationExecutions' => 'RemediationExecutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->remediationExecutions) {
            $res['RemediationExecutions'] = [];
            if (null !== $this->remediationExecutions && \is_array($this->remediationExecutions)) {
                $n = 0;
                foreach ($this->remediationExecutions as $item) {
                    $res['RemediationExecutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediationExecutionData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RemediationExecutions'])) {
            if (!empty($map['RemediationExecutions'])) {
                $model->remediationExecutions = [];
                $n                            = 0;
                foreach ($map['RemediationExecutions'] as $item) {
                    $model->remediationExecutions[$n++] = null !== $item ? remediationExecutions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
