<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySignInRecordPopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example boarding
     *
     * @var string
     */
    public $event;

    /**
     * @description nfcid
     *
     * @example cshdsaodhoashd
     *
     * @var string
     */
    public $rfid;

    /**
     * @description sessionId
     *
     * @example 2001
     *
     * @var int
     */
    public $sessionId;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'event'     => 'Event',
        'rfid'      => 'Rfid',
        'sessionId' => 'SessionId',
        'time'      => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
