<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateRCDiskResponseBody extends Model
{
    /**
     * @description The disk ID.
     *
     * @example rcd-2zegrjtnkp6dqbe1egca
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The order ID.
     *
     * @example 100789370230206
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example F2911788-25E8-42E5-A3A3-1B38D263F01E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diskId'    => 'DiskId',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
     * @return CreateRCDiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
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
