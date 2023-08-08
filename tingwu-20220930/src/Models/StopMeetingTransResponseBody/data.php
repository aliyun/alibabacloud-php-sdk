<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20220930\Models\StopMeetingTransResponseBody;

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
     * @example meeting_123
     *
     * @var string
     */
    public $meetingKey;

    /**
     * @example PRE_COMPLETE
     *
     * @var string
     */
    public $meetingStatus;
    protected $_name = [
        'meetingId'     => 'MeetingId',
        'meetingKey'    => 'MeetingKey',
        'meetingStatus' => 'MeetingStatus',
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
        if (null !== $this->meetingKey) {
            $res['MeetingKey'] = $this->meetingKey;
        }
        if (null !== $this->meetingStatus) {
            $res['MeetingStatus'] = $this->meetingStatus;
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
        if (isset($map['MeetingKey'])) {
            $model->meetingKey = $map['MeetingKey'];
        }
        if (isset($map['MeetingStatus'])) {
            $model->meetingStatus = $map['MeetingStatus'];
        }

        return $model;
    }
}
