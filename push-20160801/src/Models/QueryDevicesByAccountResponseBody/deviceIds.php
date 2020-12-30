<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAccountResponseBody;

use AlibabaCloud\Tea\Model;

class deviceIds extends Model
{
    /**
     * @var string[]
     */
    public $deviceId;
    protected $_name = [
        'deviceId' => 'DeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            if (!empty($map['DeviceId'])) {
                $model->deviceId = $map['DeviceId'];
            }
        }

        return $model;
    }
}
