<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomRulesResponseBody\waitingRoomRules;

class ListWaitingRoomRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var waitingRoomRules[]
     */
    public $waitingRoomRules;
    protected $_name = [
        'requestId' => 'RequestId',
        'waitingRoomRules' => 'WaitingRoomRules',
    ];

    public function validate()
    {
        if (\is_array($this->waitingRoomRules)) {
            Model::validateArray($this->waitingRoomRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->waitingRoomRules) {
            if (\is_array($this->waitingRoomRules)) {
                $res['WaitingRoomRules'] = [];
                $n1 = 0;
                foreach ($this->waitingRoomRules as $item1) {
                    $res['WaitingRoomRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WaitingRoomRules'])) {
            if (!empty($map['WaitingRoomRules'])) {
                $model->waitingRoomRules = [];
                $n1 = 0;
                foreach ($map['WaitingRoomRules'] as $item1) {
                    $model->waitingRoomRules[$n1] = waitingRoomRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
