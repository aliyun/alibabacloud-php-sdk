<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack;

class PreviewStackResponseBody extends Model
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
        'requestId' => 'RequestId',
        'stack' => 'Stack',
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
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stack) {
            $res['Stack'] = null !== $this->stack ? $this->stack->toArray($noStream) : $this->stack;
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

        if (isset($map['Stack'])) {
            $model->stack = stack::fromMap($map['Stack']);
        }

        return $model;
    }
}
