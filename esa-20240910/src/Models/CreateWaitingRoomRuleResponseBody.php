<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateWaitingRoomRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $waitingRoomRuleId;
    protected $_name = [
        'requestId' => 'RequestId',
        'waitingRoomRuleId' => 'WaitingRoomRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
