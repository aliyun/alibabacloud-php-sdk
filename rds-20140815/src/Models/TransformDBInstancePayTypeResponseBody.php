<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class TransformDBInstancePayTypeResponseBody extends Model
{
    /**
     * @description The billing method.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The expiration time.
     *
     * > If you call this operation to change the billing method of an instance from subscription to pay-as-you-go, this parameter is not returned.
     * @example 2020-04-20T10:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The order ID.
     *
     * @example 205157600280623
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 5E6E09DE-5B12-4BFF-A55E-1C86EDE06D9A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chargeType'   => 'ChargeType',
        'DBInstanceId' => 'DBInstanceId',
        'expiredTime'  => 'ExpiredTime',
        'orderId'      => 'OrderId',
        'requestId'    => 'RequestId',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
     * @return TransformDBInstancePayTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
