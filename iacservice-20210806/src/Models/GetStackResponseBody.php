<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackResponseBody\stack;

class GetStackResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stack
     */
    public $stack;
    protected $_name = [
        'requestId' => 'requestId',
        'stack' => 'stack',
    ];

    public function validate()
    {
        if (null !== $this->stack) {
            $this->stack->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->stack) {
            $res['stack'] = null !== $this->stack ? $this->stack->toArray($noStream) : $this->stack;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['stack'])) {
            $model->stack = stack::fromMap($map['stack']);
        }

        return $model;
    }
}
