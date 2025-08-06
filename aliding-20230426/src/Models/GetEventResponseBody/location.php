<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody;

use AlibabaCloud\Dara\Model;

class location extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $meetingRooms;
    protected $_name = [
        'displayName' => 'DisplayName',
        'meetingRooms' => 'MeetingRooms',
    ];

    public function validate()
    {
        if (\is_array($this->meetingRooms)) {
            Model::validateArray($this->meetingRooms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->meetingRooms) {
            if (\is_array($this->meetingRooms)) {
                $res['MeetingRooms'] = [];
                $n1 = 0;
                foreach ($this->meetingRooms as $item1) {
                    $res['MeetingRooms'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['MeetingRooms'])) {
            if (!empty($map['MeetingRooms'])) {
                $model->meetingRooms = [];
                $n1 = 0;
                foreach ($map['MeetingRooms'] as $item1) {
                    $model->meetingRooms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
