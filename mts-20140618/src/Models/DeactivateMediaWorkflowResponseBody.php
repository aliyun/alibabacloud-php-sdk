<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeactivateMediaWorkflowResponseBody\mediaWorkflow;

class DeactivateMediaWorkflowResponseBody extends Model
{
    /**
     * @var mediaWorkflow
     */
    public $mediaWorkflow;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaWorkflow' => 'MediaWorkflow',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaWorkflow) {
            $this->mediaWorkflow->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaWorkflow) {
            $res['MediaWorkflow'] = null !== $this->mediaWorkflow ? $this->mediaWorkflow->toArray($noStream) : $this->mediaWorkflow;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaWorkflow'])) {
            $model->mediaWorkflow = mediaWorkflow::fromMap($map['MediaWorkflow']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
