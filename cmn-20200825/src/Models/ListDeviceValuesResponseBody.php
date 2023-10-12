<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceValuesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $deviceValues;

    /**
     * @description Id of the request
     *
     * @example 6d439436-ddde-4f26-aaf6-0470099b5c35
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceValues' => 'DeviceValues',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceValues) {
            $res['DeviceValues'] = $this->deviceValues;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceValuesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceValues'])) {
            if (!empty($map['DeviceValues'])) {
                $model->deviceValues = $map['DeviceValues'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
