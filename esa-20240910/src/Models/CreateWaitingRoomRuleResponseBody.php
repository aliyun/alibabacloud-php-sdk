<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingRoomRuleResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Waiting room bypass rule ID.
     *
     * @example 420072638347264
     *
     * @var int
     */
    public $waitingRoomRuleId;
    protected $_name = [
        'requestId' => 'RequestId',
        'waitingRoomRuleId' => 'WaitingRoomRuleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waitingRoomRuleId) {
            $res['WaitingRoomRuleId'] = $this->waitingRoomRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWaitingRoomRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitingRoomRuleId'])) {
            $model->waitingRoomRuleId = $map['WaitingRoomRuleId'];
        }

        return $model;
    }
}
