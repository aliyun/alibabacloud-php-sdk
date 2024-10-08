<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomRulesResponseBody\waitingRoomRules;
use AlibabaCloud\Tea\Model;

class ListWaitingRoomRulesResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A123425345
     *
     * @var string
     */
    public $requestId;

    /**
     * @var waitingRoomRules[]
     */
    public $waitingRoomRules;
    protected $_name = [
        'requestId'        => 'RequestId',
        'waitingRoomRules' => 'WaitingRoomRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waitingRoomRules) {
            $res['WaitingRoomRules'] = [];
            if (null !== $this->waitingRoomRules && \is_array($this->waitingRoomRules)) {
                $n = 0;
                foreach ($this->waitingRoomRules as $item) {
                    $res['WaitingRoomRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWaitingRoomRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitingRoomRules'])) {
            if (!empty($map['WaitingRoomRules'])) {
                $model->waitingRoomRules = [];
                $n                       = 0;
                foreach ($map['WaitingRoomRules'] as $item) {
                    $model->waitingRoomRules[$n++] = null !== $item ? waitingRoomRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
