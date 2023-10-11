<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponseBody\events;

use AlibabaCloud\Tea\Model;

class meetingRooms extends Model
{
    /**
     * @example tony
     *
     * @var string
     */
    public $displayName;

    /**
     * @example accepted
     *
     * @var string
     */
    public $responseStatus;

    /**
     * @example c10315a8b4e740a317813ab6fxxxxxx
     *
     * @var string
     */
    public $roomId;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'responseStatus' => 'ResponseStatus',
        'roomId'         => 'RoomId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->responseStatus) {
            $res['ResponseStatus'] = $this->responseStatus;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meetingRooms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ResponseStatus'])) {
            $model->responseStatus = $map['ResponseStatus'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        return $model;
    }
}
