<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\AllocateDedicatedHostsResponseBody\dedicatedHostIdSets;
use AlibabaCloud\Tea\Model;

class AllocateDedicatedHostsResponseBody extends Model
{
    /**
     * @var dedicatedHostIdSets
     */
    public $dedicatedHostIdSets;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostIdSets' => 'DedicatedHostIdSets',
        'orderId'             => 'OrderId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostIdSets) {
            $res['DedicatedHostIdSets'] = null !== $this->dedicatedHostIdSets ? $this->dedicatedHostIdSets->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateDedicatedHostsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostIdSets'])) {
            $model->dedicatedHostIdSets = dedicatedHostIdSets::fromMap($map['DedicatedHostIdSets']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
