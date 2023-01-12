<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateBandwidthPackageResponseBody extends Model
{
    /**
     * @description The ID of the bandwidth plan.
     *
     * @example gbwp-bp1sgzldyj6b4q7cx****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The ID of the order.
     *
     * If bills are not automatically paid, you must go to the Order Center to complete the payments.
     * @example 208257****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 4B6DBBB0-2D01-4C6A-A384-4129266E6B78
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'orderId'            => 'OrderId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
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
     * @return CreateBandwidthPackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
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
