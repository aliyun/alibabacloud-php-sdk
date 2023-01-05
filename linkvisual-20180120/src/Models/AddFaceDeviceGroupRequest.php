<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddFaceDeviceGroupRequest extends Model
{
    /**
     * @example TestDeviceGroup
     *
     * @var string
     */
    public $deviceGroupName;

    /**
     * @example ZheJiangHZ
     *
     * @var string
     */
    public $isolationId;
    protected $_name = [
        'deviceGroupName' => 'DeviceGroupName',
        'isolationId'     => 'IsolationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceDeviceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }

        return $model;
    }
}
