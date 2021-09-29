<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceModelsResponseBody\deviceModels;
use AlibabaCloud\Tea\Model;

class ListDeviceModelsResponseBody extends Model
{
    /**
     * @var deviceModels[]
     */
    public $deviceModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceModels' => 'DeviceModels',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceModels) {
            $res['DeviceModels'] = [];
            if (null !== $this->deviceModels && \is_array($this->deviceModels)) {
                $n = 0;
                foreach ($this->deviceModels as $item) {
                    $res['DeviceModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceModelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceModels'])) {
            if (!empty($map['DeviceModels'])) {
                $model->deviceModels = [];
                $n                   = 0;
                foreach ($map['DeviceModels'] as $item) {
                    $model->deviceModels[$n++] = null !== $item ? deviceModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
