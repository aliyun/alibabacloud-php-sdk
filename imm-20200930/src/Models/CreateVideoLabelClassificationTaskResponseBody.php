<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoLabelClassificationTaskResponseBody extends Model
{
    /**
     * @description The event ID of the current task. You can use [EventBridge](https://www.alibabacloud.com/en/product/eventbridge) to query the ID and obtain the task information notification.
     *
     * @example 03F-1Qt1Yn5RZZ0Zh3ZdYlDblv7****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The request ID.
     *
     * @example CA995EFD-083D-4F40-BE8A-BDF75FFFE0B6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the current task. You can call the [GetTask](~~GetTask~~) operation to view the task information or the [GetVideoLabelClassificationResult](https://help.aliyun.com/document_detail/478224.html) operation to obtain the result of the video label detection task.
     *
     * @example VideoLabelClassification-2f157087-91df-4fda-8c3e-232407ec*****
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
     * @return CreateVideoLabelClassificationTaskResponseBody
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
