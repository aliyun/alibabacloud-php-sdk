<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeregisterManagedInstanceResponseBody\instance;
use AlibabaCloud\Tea\Model;

class DeregisterManagedInstanceResponseBody extends Model
{
    /**
     * @description Details of the managed instances.
     *
     * @var instance
     */
    public $instance;

    /**
     * @description The request ID.
     *
     * @example 4ECEEE12-56F1-4FBC-9AB1-890F74942176
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instance' => 'Instance',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
