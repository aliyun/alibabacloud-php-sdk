<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceResourceResponseBody\deviceResource;
use AlibabaCloud\Tea\Model;

class GetDeviceResourceResponseBody extends Model
{
    /**
     * @example ConfigurationSpecificationName
     *
     * @var deviceResource
     */
    public $deviceResource;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceResource' => 'DeviceResource',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceResource) {
            $res['DeviceResource'] = null !== $this->deviceResource ? $this->deviceResource->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceResource'])) {
            $model->deviceResource = deviceResource::fromMap($map['DeviceResource']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
