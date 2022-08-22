<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponseBody\result\deviceUnionIds;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $deviceOpenId;

    /**
     * @var deviceUnionIds[]
     */
    public $deviceUnionIds;
    protected $_name = [
        'deviceOpenId'   => 'DeviceOpenId',
        'deviceUnionIds' => 'DeviceUnionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceOpenId) {
            $res['DeviceOpenId'] = $this->deviceOpenId;
        }
        if (null !== $this->deviceUnionIds) {
            $res['DeviceUnionIds'] = [];
            if (null !== $this->deviceUnionIds && \is_array($this->deviceUnionIds)) {
                $n = 0;
                foreach ($this->deviceUnionIds as $item) {
                    $res['DeviceUnionIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceOpenId'])) {
            $model->deviceOpenId = $map['DeviceOpenId'];
        }
        if (isset($map['DeviceUnionIds'])) {
            if (!empty($map['DeviceUnionIds'])) {
                $model->deviceUnionIds = [];
                $n                     = 0;
                foreach ($map['DeviceUnionIds'] as $item) {
                    $model->deviceUnionIds[$n++] = null !== $item ? deviceUnionIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
