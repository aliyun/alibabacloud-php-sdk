<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\DeactivateMediaWorkflowResponseBody\mediaWorkflow;
use AlibabaCloud\Tea\Model;

class DeactivateMediaWorkflowResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaWorkflow
     */
    public $mediaWorkflow;
    protected $_name = [
        'requestId'     => 'RequestId',
        'mediaWorkflow' => 'MediaWorkflow',
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
        if (null !== $this->mediaWorkflow) {
            $res['MediaWorkflow'] = null !== $this->mediaWorkflow ? $this->mediaWorkflow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeactivateMediaWorkflowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaWorkflow'])) {
            $model->mediaWorkflow = mediaWorkflow::fromMap($map['MediaWorkflow']);
        }

        return $model;
    }
}
