<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\QueryTrajectoryByIdRequest;

use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @var string
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
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}
