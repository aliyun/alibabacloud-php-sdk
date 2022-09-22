<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsPathsResponseBody\networkInsightsPathSets;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInsightsPathsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var networkInsightsPathSets
     */
    public $networkInsightsPathSets;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults'              => 'MaxResults',
        'networkInsightsPathSets' => 'NetworkInsightsPathSets',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
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
        if (null !== $this->networkInsightsPathSets) {
            $res['NetworkInsightsPathSets'] = null !== $this->networkInsightsPathSets ? $this->networkInsightsPathSets->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInsightsPathsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkInsightsPathSets'])) {
            $model->networkInsightsPathSets = networkInsightsPathSets::fromMap($map['NetworkInsightsPathSets']);
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
