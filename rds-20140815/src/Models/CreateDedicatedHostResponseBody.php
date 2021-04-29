<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponseBody\dedicateHostList;
use AlibabaCloud\Tea\Model;

class CreateDedicatedHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dedicateHostList
     */
    public $dedicateHostList;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'dedicateHostList' => 'DedicateHostList',
        'orderId'          => 'OrderId',
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
        if (null !== $this->dedicateHostList) {
            $res['DedicateHostList'] = null !== $this->dedicateHostList ? $this->dedicateHostList->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicateHostList'])) {
            $model->dedicateHostList = dedicateHostList::fromMap($map['DedicateHostList']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
