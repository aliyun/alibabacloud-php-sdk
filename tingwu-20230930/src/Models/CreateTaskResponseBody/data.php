<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $meetingJoinUrl;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskKey;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'meetingJoinUrl' => 'MeetingJoinUrl',
        'taskId' => 'TaskId',
        'taskKey' => 'TaskKey',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meetingJoinUrl) {
            $res['MeetingJoinUrl'] = $this->meetingJoinUrl;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskKey) {
            $res['TaskKey'] = $this->taskKey;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['MeetingJoinUrl'])) {
            $model->meetingJoinUrl = $map['MeetingJoinUrl'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskKey'])) {
            $model->taskKey = $map['TaskKey'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
