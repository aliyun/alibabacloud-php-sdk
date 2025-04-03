<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineResponseBody\resourceComplianceTimeline;

class GetResourceComplianceTimelineResponseBody extends Model
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
        'requestId' => 'RequestId',
        'resourceComplianceTimeline' => 'ResourceComplianceTimeline',
    ];

    public function validate()
    {
        if (null !== $this->resourceComplianceTimeline) {
            $this->resourceComplianceTimeline->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceComplianceTimeline) {
            $res['ResourceComplianceTimeline'] = null !== $this->resourceComplianceTimeline ? $this->resourceComplianceTimeline->toArray($noStream) : $this->resourceComplianceTimeline;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceComplianceTimeline'])) {
            $model->resourceComplianceTimeline = resourceComplianceTimeline::fromMap($map['ResourceComplianceTimeline']);
        }

        return $model;
    }
}
