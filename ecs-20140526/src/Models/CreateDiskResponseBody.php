<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $diskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'orderId'   => 'OrderId',
        'diskId'    => 'DiskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        return $model;
    }
}
