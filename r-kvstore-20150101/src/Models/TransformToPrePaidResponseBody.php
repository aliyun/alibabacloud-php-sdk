<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class TransformToPrePaidResponseBody extends Model
{
    /**
     * @description The time when the instance expires after the billing method of the instance is changed from pay-as-you-go to subscription.
     *
     * @example 2019-01-18T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the order.
     *
     * @example 111111111111111
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 426F1356-B6EF-4DAD-A1C3-DE53B9DAF586
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
     * @return TransformToPrePaidResponseBody
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
