<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20220930\Models\CreateMeetingTransResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example f7de74778d94422283534102dfc0****
     *
     * @var string
     */
    public $meetingId;

    /**
     * @example wss://tingwu-realtime-cn-beijing.aliyuncs.com/api/ws/v1?mc=****
     *
     * @var string
     */
    public $meetingJoinUrl;

    /**
     * @example meeting_123
     *
     * @var string
     */
    public $meetingKey;
    protected $_name = [
        'meetingId'      => 'MeetingId',
        'meetingJoinUrl' => 'MeetingJoinUrl',
        'meetingKey'     => 'MeetingKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meetingId) {
            $res['MeetingId'] = $this->meetingId;
        }
        if (null !== $this->meetingJoinUrl) {
            $res['MeetingJoinUrl'] = $this->meetingJoinUrl;
        }
        if (null !== $this->meetingKey) {
            $res['MeetingKey'] = $this->meetingKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MeetingId'])) {
            $model->meetingId = $map['MeetingId'];
        }
        if (isset($map['MeetingJoinUrl'])) {
            $model->meetingJoinUrl = $map['MeetingJoinUrl'];
        }
        if (isset($map['MeetingKey'])) {
            $model->meetingKey = $map['MeetingKey'];
        }

        return $model;
    }
}
