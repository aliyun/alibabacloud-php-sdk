<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAccountResponseBody\deviceIds;
use AlibabaCloud\Tea\Model;

class QueryDevicesByAccountResponseBody extends Model
{
    /**
     * @var deviceIds
     */
    public $deviceIds;

    /**
     * @example A8A24108-2AD0-4F6E-81C7-A8A24C2C2AD0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceIds' => 'DeviceIds',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = null !== $this->deviceIds ? $this->deviceIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDevicesByAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIds'])) {
            $model->deviceIds = deviceIds::fromMap($map['DeviceIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
