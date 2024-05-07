<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsTaskRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @example d9ee5df9-20bf-47bf-987a-76b26984b***
     *
     * @var string
     */
    public $key;

    /**
     * @example 655259585579***
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 1662271315039
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'key'       => 'Key',
        'roomId'    => 'RoomId',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
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
