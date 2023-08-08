<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponseBody\trafficMarkingPolicies;
use AlibabaCloud\Tea\Model;

class ListTrafficMarkingPoliciesResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 699989E4-64A0-5F78-8B93-CDB32D98971F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var trafficMarkingPolicies[]
     */
    public $trafficMarkingPolicies;
    protected $_name = [
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
        'trafficMarkingPolicies' => 'TrafficMarkingPolicies',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trafficMarkingPolicies) {
            $res['TrafficMarkingPolicies'] = [];
            if (null !== $this->trafficMarkingPolicies && \is_array($this->trafficMarkingPolicies)) {
                $n = 0;
                foreach ($this->trafficMarkingPolicies as $item) {
                    $res['TrafficMarkingPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficMarkingPoliciesResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrafficMarkingPolicies'])) {
            if (!empty($map['TrafficMarkingPolicies'])) {
                $model->trafficMarkingPolicies = [];
                $n                             = 0;
                foreach ($map['TrafficMarkingPolicies'] as $item) {
                    $model->trafficMarkingPolicies[$n++] = null !== $item ? trafficMarkingPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
