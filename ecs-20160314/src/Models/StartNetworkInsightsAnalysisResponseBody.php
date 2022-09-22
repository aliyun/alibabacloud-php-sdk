<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class StartNetworkInsightsAnalysisResponseBody extends Model
{
    /**
     * @var string
     */
    public $networkInsightsAnalysisId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkInsightsAnalysisId' => 'NetworkInsightsAnalysisId',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInsightsAnalysisId) {
            $res['NetworkInsightsAnalysisId'] = $this->networkInsightsAnalysisId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartNetworkInsightsAnalysisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInsightsAnalysisId'])) {
            $model->networkInsightsAnalysisId = $map['NetworkInsightsAnalysisId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
