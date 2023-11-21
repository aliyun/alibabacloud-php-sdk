<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponseBody\dedicateHostList;
use AlibabaCloud\Tea\Model;

class CreateDedicatedHostResponseBody extends Model
{
    /**
     * @description The created hosts.
     *
     * @var dedicateHostList
     */
    public $dedicateHostList;

    /**
     * @description The order ID.
     *
     * @example 102565235
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example C860658E-68A6-46C1-AF6E-3AE7C4D32375
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicateHostList' => 'DedicateHostList',
        'orderId'          => 'OrderId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicateHostList) {
            $res['DedicateHostList'] = null !== $this->dedicateHostList ? $this->dedicateHostList->toMap() : null;
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
     * @return CreateDedicatedHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicateHostList'])) {
            $model->dedicateHostList = dedicateHostList::fromMap($map['DedicateHostList']);
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
