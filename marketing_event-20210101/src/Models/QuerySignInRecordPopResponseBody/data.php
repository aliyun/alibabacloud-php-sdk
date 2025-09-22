<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySignInRecordPopResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $rfid;

    /**
     * @var int
     */
    public $sessionId;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'event' => 'Event',
        'rfid' => 'Rfid',
        'sessionId' => 'SessionId',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->rfid) {
            $res['Rfid'] = $this->rfid;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['Rfid'])) {
            $model->rfid = $map['Rfid'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
