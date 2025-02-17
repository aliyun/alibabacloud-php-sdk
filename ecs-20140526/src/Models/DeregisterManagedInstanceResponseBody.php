<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeregisterManagedInstanceResponseBody\instance;

class DeregisterManagedInstanceResponseBody extends Model
{
    /**
     * @var instance
     */
    public $instance;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instance'  => 'Instance',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instance) {
            $this->instance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toArray($noStream) : $this->instance;
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
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
