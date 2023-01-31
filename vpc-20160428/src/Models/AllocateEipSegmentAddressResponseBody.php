<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateEipSegmentAddressResponseBody extends Model
{
    /**
     * @example eipsg-2zett8ba055tbsxme****
     *
     * @var string
     */
    public $eipSegmentInstanceId;

    /**
     * @example 2022****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example F7A6301A-64BA-41EC-8284-8F4838C15D1F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eipSegmentInstanceId' => 'EipSegmentInstanceId',
        'orderId'              => 'OrderId',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipSegmentInstanceId) {
            $res['EipSegmentInstanceId'] = $this->eipSegmentInstanceId;
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
     * @return AllocateEipSegmentAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipSegmentInstanceId'])) {
            $model->eipSegmentInstanceId = $map['EipSegmentInstanceId'];
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
