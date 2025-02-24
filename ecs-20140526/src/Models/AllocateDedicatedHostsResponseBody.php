<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsResponseBody\dedicatedHostIdSets;

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
        if (null !== $this->dedicatedHostIdSets) {
            $this->dedicatedHostIdSets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostIdSets) {
            $res['DedicatedHostIdSets'] = null !== $this->dedicatedHostIdSets ? $this->dedicatedHostIdSets->toArray($noStream) : $this->dedicatedHostIdSets;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
