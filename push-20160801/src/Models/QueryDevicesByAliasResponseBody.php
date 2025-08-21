<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAliasResponseBody\deviceIds;

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
        if (null !== $this->deviceIds) {
            $this->deviceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = null !== $this->deviceIds ? $this->deviceIds->toArray($noStream) : $this->deviceIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
