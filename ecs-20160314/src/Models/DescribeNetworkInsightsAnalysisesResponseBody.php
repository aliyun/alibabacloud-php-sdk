<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisesResponseBody\networkInsightsAnalysisSets;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInsightsAnalysisesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var networkInsightsAnalysisSets
     */
    public $networkInsightsAnalysisSets;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults'                  => 'MaxResults',
        'networkInsightsAnalysisSets' => 'NetworkInsightsAnalysisSets',
        'nextToken'                   => 'NextToken',
        'requestId'                   => 'RequestId',
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
        if (null !== $this->networkInsightsAnalysisSets) {
            $res['NetworkInsightsAnalysisSets'] = null !== $this->networkInsightsAnalysisSets ? $this->networkInsightsAnalysisSets->toMap() : null;
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
     * @return DescribeNetworkInsightsAnalysisesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkInsightsAnalysisSets'])) {
            $model->networkInsightsAnalysisSets = networkInsightsAnalysisSets::fromMap($map['NetworkInsightsAnalysisSets']);
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
