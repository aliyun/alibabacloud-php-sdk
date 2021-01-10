<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceBrandsResponseBody\deviceBrands;
use AlibabaCloud\Tea\Model;

class ListDeviceBrandsResponseBody extends Model
{
    /**
     * @var deviceBrands[]
     */
    public $deviceBrands;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceBrands' => 'DeviceBrands',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceBrands) {
            $res['DeviceBrands'] = [];
            if (null !== $this->deviceBrands && \is_array($this->deviceBrands)) {
                $n = 0;
                foreach ($this->deviceBrands as $item) {
                    $res['DeviceBrands'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDeviceBrandsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceBrands'])) {
            if (!empty($map['DeviceBrands'])) {
                $model->deviceBrands = [];
                $n                   = 0;
                foreach ($map['DeviceBrands'] as $item) {
                    $model->deviceBrands[$n++] = null !== $item ? deviceBrands::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
