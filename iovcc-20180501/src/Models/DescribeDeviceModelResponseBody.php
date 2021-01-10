<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceModelResponseBody\deviceModel;
use AlibabaCloud\Tea\Model;

class DescribeDeviceModelResponseBody extends Model
{
    /**
     * @var deviceModel
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceModel' => 'DeviceModel',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = null !== $this->deviceModel ? $this->deviceModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = deviceModel::fromMap($map['DeviceModel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
