<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody\device;
use AlibabaCloud\Tea\Model;

class GetUserDeviceResponseBody extends Model
{
    /**
     * @var device
     */
    public $device;

    /**
     * @example EFE7EBB2-449D-5BBB-B381-CA7839BC1649
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'device'    => 'Device',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = device::fromMap($map['Device']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
