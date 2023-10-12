<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateDevicePropertyResponseBody extends Model
{
    /**
     * @example property-z50wex75a1lkx7vx
     *
     * @var string
     */
    public $devicePropertyId;

    /**
     * @example 1f598491-db6d-4276-a83a-3b5f57d4a4e1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'devicePropertyId' => 'DevicePropertyId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devicePropertyId) {
            $res['DevicePropertyId'] = $this->devicePropertyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDevicePropertyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevicePropertyId'])) {
            $model->devicePropertyId = $map['DevicePropertyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
