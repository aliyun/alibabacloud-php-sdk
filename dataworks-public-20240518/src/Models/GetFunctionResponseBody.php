<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFunctionResponseBody\function_;

class GetFunctionResponseBody extends Model
{
    /**
     * @var function_
     */
    public $function;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'function'  => 'Function',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->function) {
            $this->function->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = null !== $this->function ? $this->function->toArray($noStream) : $this->function;
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
        if (isset($map['Function'])) {
            $model->function = function_::fromMap($map['Function']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
