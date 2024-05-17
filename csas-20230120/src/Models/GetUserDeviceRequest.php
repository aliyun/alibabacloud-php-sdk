<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class GetUserDeviceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 36efa42d-2c32-c4dc-e3fc-8541e33a****
     *
     * @var string
     */
    public $deviceTag;
    protected $_name = [
        'deviceTag' => 'DeviceTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceTag) {
            $res['DeviceTag'] = $this->deviceTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceTag'])) {
            $model->deviceTag = $map['DeviceTag'];
        }

        return $model;
    }
}
