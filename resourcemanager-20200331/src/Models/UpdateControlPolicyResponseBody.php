<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateControlPolicyResponseBody\controlPolicy;

class UpdateControlPolicyResponseBody extends Model
{
    /**
     * @var controlPolicy
     */
    public $controlPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'controlPolicy' => 'ControlPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->controlPolicy) {
            $this->controlPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlPolicy) {
            $res['ControlPolicy'] = null !== $this->controlPolicy ? $this->controlPolicy->toArray($noStream) : $this->controlPolicy;
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
        if (isset($map['ControlPolicy'])) {
            $model->controlPolicy = controlPolicy::fromMap($map['ControlPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
