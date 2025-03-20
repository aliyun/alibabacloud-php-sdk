<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingRoomEventResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A123425345
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $waitingRoomEventId;
    protected $_name = [
        'requestId' => 'RequestId',
        'waitingRoomEventId' => 'WaitingRoomEventId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waitingRoomEventId) {
            $res['WaitingRoomEventId'] = $this->waitingRoomEventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWaitingRoomEventResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitingRoomEventId'])) {
            $model->waitingRoomEventId = $map['WaitingRoomEventId'];
        }

        return $model;
    }
}
