<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceModelResponseBody\deviceModel;
use AlibabaCloud\Tea\Model;

class DescribeDeviceModelResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceModel
     */
    public $deviceModel;
    protected $_name = [
        'requestId'   => 'RequestId',
        'deviceModel' => 'DeviceModel',
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
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = null !== $this->deviceModel ? $this->deviceModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceModelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = deviceModel::fromMap($map['DeviceModel']);
        }

        return $model;
    }
}
