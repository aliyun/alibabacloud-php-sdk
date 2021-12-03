<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOrderResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryOrderResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $deliveryStatus;

    /**
     * @var string
     */
    public $refundStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'           => 'Data',
        'deliveryStatus' => 'DeliveryStatus',
        'refundStatus'   => 'RefundStatus',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->deliveryStatus) {
            $res['DeliveryStatus'] = $this->deliveryStatus;
        }
        if (null !== $this->refundStatus) {
            $res['RefundStatus'] = $this->refundStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['DeliveryStatus'])) {
            $model->deliveryStatus = $map['DeliveryStatus'];
        }
        if (isset($map['RefundStatus'])) {
            $model->refundStatus = $map['RefundStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
