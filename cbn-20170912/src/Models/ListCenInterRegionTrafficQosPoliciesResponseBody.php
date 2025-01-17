<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody\trafficQosPolicies;

class ListCenInterRegionTrafficQosPoliciesResponseBody extends Model
{
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
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    /**
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
        if (\is_array($this->trafficQosPolicies)) {
            Model::validateArray($this->trafficQosPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->trafficQosPolicies)) {
                $res['TrafficQosPolicies'] = [];
                $n1                        = 0;
                foreach ($this->trafficQosPolicies as $item1) {
                    $res['TrafficQosPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                        = 0;
                foreach ($map['TrafficQosPolicies'] as $item1) {
                    $model->trafficQosPolicies[$n1++] = trafficQosPolicies::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
