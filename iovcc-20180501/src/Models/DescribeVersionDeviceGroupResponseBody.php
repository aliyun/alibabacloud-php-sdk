<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeVersionDeviceGroupResponseBody\deviceGroup;
use AlibabaCloud\Tea\Model;

class DescribeVersionDeviceGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceGroup
     */
    public $deviceGroup;
    protected $_name = [
        'requestId'   => 'RequestId',
        'deviceGroup' => 'DeviceGroup',
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
        if (null !== $this->deviceGroup) {
            $res['DeviceGroup'] = null !== $this->deviceGroup ? $this->deviceGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVersionDeviceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceGroup'])) {
            $model->deviceGroup = deviceGroup::fromMap($map['DeviceGroup']);
        }

        return $model;
    }
}
