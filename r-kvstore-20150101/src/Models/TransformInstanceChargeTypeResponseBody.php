<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class TransformInstanceChargeTypeResponseBody extends Model
{
    /**
     * @description The time when the instance expires.
     *
     * >  A value is returned for this parameter only if the instance was changed from pay-as-you-go to subscription.
     * @example 2021-05-13T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the order.
     *
     * @example 20881824000****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 82C791FB-8979-489E-853D-706D7743****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endTime'   => 'EndTime',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
     * @return TransformInstanceChargeTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
