<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkInsightsPathResponseBody extends Model
{
    /**
     * @var string
     */
    public $networkInsightsPathId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkInsightsPathId' => 'NetworkInsightsPathId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInsightsPathId) {
            $res['NetworkInsightsPathId'] = $this->networkInsightsPathId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkInsightsPathResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInsightsPathId'])) {
            $model->networkInsightsPathId = $map['NetworkInsightsPathId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
