<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class CheckDevicesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 23419851
     *
     * @var int
     */
    public $appKey;

    /**
     * @description This parameter is required.
     *
     * @example ae296f3b04a58a05b30c95f****,ae296f3b04a58a05b30c95f****,ae296f3b04a58a05b30c95f****
     *
     * @var string
     */
    public $deviceIds;
    protected $_name = [
        'appKey'    => 'AppKey',
        'deviceIds' => 'DeviceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['DeviceIds'])) {
            $model->deviceIds = $map['DeviceIds'];
        }

        return $model;
    }
}
