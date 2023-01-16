<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateStoryResponseBody extends Model
{
    /**
     * @example 392-1CqzvESGTEeNZ2OWFbRKIM****
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 1B3D5E0A-D8B8-4DA0-8127-ED32C851****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example CreateStory-4ef6ff43-edf3-4612-9cc4-0c7f9e19****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'eventId'   => 'EventId',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
