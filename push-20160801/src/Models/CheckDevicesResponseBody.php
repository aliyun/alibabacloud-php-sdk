<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody\deviceCheckInfos;
use AlibabaCloud\Tea\Model;

class CheckDevicesResponseBody extends Model
{
    /**
     * @var deviceCheckInfos
     */
    public $deviceCheckInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceCheckInfos' => 'DeviceCheckInfos',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCheckInfos) {
            $res['DeviceCheckInfos'] = null !== $this->deviceCheckInfos ? $this->deviceCheckInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeviceCheckInfos'])) {
            $model->deviceCheckInfos = deviceCheckInfos::fromMap($map['DeviceCheckInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
