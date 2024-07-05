<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindPurchasedDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example some error
     *
     * @var string
     */
    public $error;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'error'    => 'Error',
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
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        return $model;
    }
}
