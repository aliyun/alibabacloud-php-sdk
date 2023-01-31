<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateRouterInterfaceResponseBody extends Model
{
    /**
     * @example 202008594930117
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 079874CD-AEC1-43E6-AC03-ADD96B6E4907
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ri-2ze7fbuohm****
     *
     * @var string
     */
    public $routerInterfaceId;
    protected $_name = [
        'orderId'           => 'OrderId',
        'requestId'         => 'RequestId',
        'routerInterfaceId' => 'RouterInterfaceId',
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
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouterInterfaceResponseBody
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
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }

        return $model;
    }
}
