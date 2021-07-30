<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAccountResponseBody\deviceIds;
use AlibabaCloud\Tea\Model;

class QueryDevicesByAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceIds
     */
    public $deviceIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'deviceIds' => 'DeviceIds',
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
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = null !== $this->deviceIds ? $this->deviceIds->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceIds'])) {
            $model->deviceIds = deviceIds::fromMap($map['DeviceIds']);
        }

        return $model;
    }
}
