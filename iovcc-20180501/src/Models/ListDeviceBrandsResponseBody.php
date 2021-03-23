<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceBrandsResponseBody\deviceBrands;
use AlibabaCloud\Tea\Model;

class ListDeviceBrandsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceBrands[]
     */
    public $deviceBrands;
    protected $_name = [
        'requestId'    => 'RequestId',
        'deviceBrands' => 'DeviceBrands',
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
        if (null !== $this->deviceBrands) {
            $res['DeviceBrands'] = [];
            if (null !== $this->deviceBrands && \is_array($this->deviceBrands)) {
                $n = 0;
                foreach ($this->deviceBrands as $item) {
                    $res['DeviceBrands'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceBrands'])) {
            if (!empty($map['DeviceBrands'])) {
                $model->deviceBrands = [];
                $n                   = 0;
                foreach ($map['DeviceBrands'] as $item) {
                    $model->deviceBrands[$n++] = null !== $item ? deviceBrands::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
