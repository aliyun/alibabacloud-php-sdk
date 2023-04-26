<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponseBody\resourceComplianceTimeline;
use AlibabaCloud\Tea\Model;

class GetAggregateResourceComplianceTimelineResponseBody extends Model
{
    /**
     * @description The type of the resource.
     *
     * @example 8D53A78F-1EB8-4264-A554-72F07E34FAE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp when the resource was created. Unit: milliseconds.
     *
     * @var resourceComplianceTimeline
     */
    public $resourceComplianceTimeline;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'resourceComplianceTimeline' => 'ResourceComplianceTimeline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceComplianceTimeline) {
            $res['ResourceComplianceTimeline'] = null !== $this->resourceComplianceTimeline ? $this->resourceComplianceTimeline->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateResourceComplianceTimelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceComplianceTimeline'])) {
            $model->resourceComplianceTimeline = resourceComplianceTimeline::fromMap($map['ResourceComplianceTimeline']);
        }

        return $model;
    }
}
