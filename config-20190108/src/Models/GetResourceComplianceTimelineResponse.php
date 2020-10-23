<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineResponse\resourceComplianceTimeline;
use AlibabaCloud\Tea\Model;

class GetResourceComplianceTimelineResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceComplianceTimeline
     */
    public $resourceComplianceTimeline;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'resourceComplianceTimeline' => 'ResourceComplianceTimeline',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resourceComplianceTimeline', $this->resourceComplianceTimeline, true);
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
     * @return GetResourceComplianceTimelineResponse
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
