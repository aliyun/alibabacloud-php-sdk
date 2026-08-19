<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateForwardStrategyResponseBody\forwardStrategy;

class CreateForwardStrategyResponseBody extends Model
{
    /**
     * @var forwardStrategy
     */
    public $forwardStrategy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forwardStrategy' => 'ForwardStrategy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->forwardStrategy) {
            $this->forwardStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardStrategy) {
            $res['ForwardStrategy'] = null !== $this->forwardStrategy ? $this->forwardStrategy->toArray($noStream) : $this->forwardStrategy;
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
        if (isset($map['ForwardStrategy'])) {
            $model->forwardStrategy = forwardStrategy::fromMap($map['ForwardStrategy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
