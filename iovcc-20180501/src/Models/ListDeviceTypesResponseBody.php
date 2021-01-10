<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceTypesResponseBody\deviceTypes;
use AlibabaCloud\Tea\Model;

class ListDeviceTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceTypes[]
     */
    public $deviceTypes;
    protected $_name = [
        'requestId'   => 'RequestId',
        'deviceTypes' => 'DeviceTypes',
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
        if (null !== $this->deviceTypes) {
            $res['DeviceTypes'] = [];
            if (null !== $this->deviceTypes && \is_array($this->deviceTypes)) {
                $n = 0;
                foreach ($this->deviceTypes as $item) {
                    $res['DeviceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceTypes'])) {
            if (!empty($map['DeviceTypes'])) {
                $model->deviceTypes = [];
                $n                  = 0;
                foreach ($map['DeviceTypes'] as $item) {
                    $model->deviceTypes[$n++] = null !== $item ? deviceTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
