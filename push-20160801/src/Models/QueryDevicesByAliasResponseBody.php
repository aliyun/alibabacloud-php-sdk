<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAliasResponseBody\deviceIds;
use AlibabaCloud\Tea\Model;

class QueryDevicesByAliasResponseBody extends Model
{
    /**
     * @var deviceIds
     */
    public $deviceIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceIds' => 'DeviceIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return QueryDevicesByAliasResponseBody
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
