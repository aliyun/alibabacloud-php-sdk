<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteDBNodesResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the order.
     *
     * @example 2035638*******
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 6566B2E6-3157-4B57-A693-AFB751******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
     * @return DeleteDBNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
