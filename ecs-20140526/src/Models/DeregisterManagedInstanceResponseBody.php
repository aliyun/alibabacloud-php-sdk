<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeregisterManagedInstanceResponseBody\instance;
use AlibabaCloud\Tea\Model;

class DeregisterManagedInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instance
     */
    public $instance;
    protected $_name = [
        'requestId' => 'RequestId',
        'instance'  => 'Instance',
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
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeregisterManagedInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }

        return $model;
    }
}
