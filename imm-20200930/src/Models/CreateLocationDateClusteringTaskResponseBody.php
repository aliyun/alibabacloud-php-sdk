<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateLocationDateClusteringTaskResponseBody extends Model
{
    /**
     * @description The event ID.
     *
     * @example 25B-1W2ChgujA3Q8MbBY6mSp2mh****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The request ID.
     *
     * @example B121940C-9794-4EE3-8D6E-F8EC525F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example LocationDateClustering-c10dce07-1de7-4da7-abee-1a3aba7****
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
     * @return CreateLocationDateClusteringTaskResponseBody
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
