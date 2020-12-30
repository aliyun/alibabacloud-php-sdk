<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateEipSegmentAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $eipSegmentInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'eipSegmentInstanceId' => 'EipSegmentInstanceId',
        'requestId'            => 'RequestId',
        'orderId'              => 'OrderId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
