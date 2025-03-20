<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingRoomResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 85H66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $waitingRoomId;
    protected $_name = [
        'requestId' => 'RequestId',
        'waitingRoomId' => 'WaitingRoomId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waitingRoomId) {
            $res['WaitingRoomId'] = $this->waitingRoomId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWaitingRoomResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitingRoomId'])) {
            $model->waitingRoomId = $map['WaitingRoomId'];
        }

        return $model;
    }
}
