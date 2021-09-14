<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponseBody\dedicateHostList;
use AlibabaCloud\Tea\Model;

class CreateDedicatedHostResponseBody extends Model
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dedicateHostList
     */
    public $dedicateHostList;
    protected $_name = [
        'orderId'          => 'OrderId',
        'requestId'        => 'RequestId',
        'dedicateHostList' => 'DedicateHostList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dedicateHostList) {
            $res['DedicateHostList'] = null !== $this->dedicateHostList ? $this->dedicateHostList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicateHostList'])) {
            $model->dedicateHostList = dedicateHostList::fromMap($map['DedicateHostList']);
        }

        return $model;
    }
}
