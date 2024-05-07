<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrTaskRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @example d9ee5df9-20bf-47bf-987a-76b26984b***
     *
     * @var string
     */
    public $appId;

    /**
     * @example d9ee5df9-20bf-47bf-987a-76b26984b***
     *
     * @var string
     */
    public $asrTaskId;

    /**
     * @example START
     *
     * @var string
     */
    public $event;

    /**
     * @example 662027426755***
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 1656388156399
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'appId'     => 'AppId',
        'asrTaskId' => 'AsrTaskId',
        'event'     => 'Event',
        'roomId'    => 'RoomId',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->asrTaskId) {
            $res['AsrTaskId'] = $this->asrTaskId;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AsrTaskId'])) {
            $model->asrTaskId = $map['AsrTaskId'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
