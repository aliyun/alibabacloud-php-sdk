<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponseBody\events;

use AlibabaCloud\Dara\Model;

class meetingRooms extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $responseStatus;

    /**
     * @var string
     */
    public $roomId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'responseStatus' => 'ResponseStatus',
        'roomId' => 'RoomId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
