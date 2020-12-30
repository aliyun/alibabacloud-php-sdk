<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody\deviceCheckInfos;
use AlibabaCloud\Tea\Model;

class CheckDevicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceCheckInfos
     */
    public $deviceCheckInfos;
    protected $_name = [
        'requestId'        => 'RequestId',
        'deviceCheckInfos' => 'DeviceCheckInfos',
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
        if (null !== $this->deviceCheckInfos) {
            $res['DeviceCheckInfos'] = null !== $this->deviceCheckInfos ? $this->deviceCheckInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceCheckInfos'])) {
            $model->deviceCheckInfos = deviceCheckInfos::fromMap($map['DeviceCheckInfos']);
        }

        return $model;
    }
}
