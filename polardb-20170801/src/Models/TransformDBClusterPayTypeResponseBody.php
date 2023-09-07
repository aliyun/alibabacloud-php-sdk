<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class TransformDBClusterPayTypeResponseBody extends Model
{
    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The cluster ID.
     *
     * @example pc-bp10gr51qasnl****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The time when the cluster expires.
     *
     * >  This parameter is returned if you set the **PayType** parameter to **Prepaid**.
     * @example 2020-04-20T10:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the order.
     *
     * @example 20515760028****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example 5E71541A-6007-4DCC-A38A-F872C31FEB45
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chargeType'  => 'ChargeType',
        'DBClusterId' => 'DBClusterId',
        'expiredTime' => 'ExpiredTime',
        'orderId'     => 'OrderId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
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
     * @return TransformDBClusterPayTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
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
