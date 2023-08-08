<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody\trafficQosPolicies;
use AlibabaCloud\Tea\Model;

class ListCenInterRegionTrafficQosPoliciesResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query.
     *
     *   If **NextToken** was not returned in the previous query, it indicates that no additional results exist.
     *   If **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 113BFD47-63DF-5D9D-972C-033FB9C360CD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description A list of QoS policies.
     *
     * @var trafficQosPolicies[]
     */
    public $trafficQosPolicies;
    protected $_name = [
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
        'trafficQosPolicies' => 'TrafficQosPolicies',
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
        if (null !== $this->trafficQosPolicies) {
            $res['TrafficQosPolicies'] = [];
            if (null !== $this->trafficQosPolicies && \is_array($this->trafficQosPolicies)) {
                $n = 0;
                foreach ($this->trafficQosPolicies as $item) {
                    $res['TrafficQosPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCenInterRegionTrafficQosPoliciesResponseBody
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
        if (isset($map['TrafficQosPolicies'])) {
            if (!empty($map['TrafficQosPolicies'])) {
                $model->trafficQosPolicies = [];
                $n                         = 0;
                foreach ($map['TrafficQosPolicies'] as $item) {
                    $model->trafficQosPolicies[$n++] = null !== $item ? trafficQosPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
