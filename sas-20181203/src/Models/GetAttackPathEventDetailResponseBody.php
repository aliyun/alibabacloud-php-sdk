<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackPathEventDetailResponseBody\attackPathEvent;

class GetAttackPathEventDetailResponseBody extends Model
{
    /**
     * @var attackPathEvent
     */
    public $attackPathEvent;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackPathEvent' => 'AttackPathEvent',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->attackPathEvent) {
            $this->attackPathEvent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathEvent) {
            $res['AttackPathEvent'] = null !== $this->attackPathEvent ? $this->attackPathEvent->toArray($noStream) : $this->attackPathEvent;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AttackPathEvent'])) {
            $model->attackPathEvent = attackPathEvent::fromMap($map['AttackPathEvent']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
