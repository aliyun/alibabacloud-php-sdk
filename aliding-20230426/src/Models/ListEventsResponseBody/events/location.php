<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @example room 1-2-3
     *
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $meetingRooms;
    protected $_name = [
        'displayName'  => 'DisplayName',
        'meetingRooms' => 'MeetingRooms',
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
        if (null !== $this->meetingRooms) {
            $res['MeetingRooms'] = $this->meetingRooms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['MeetingRooms'])) {
            if (!empty($map['MeetingRooms'])) {
                $model->meetingRooms = $map['MeetingRooms'];
            }
        }

        return $model;
    }
}
