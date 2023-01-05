<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceDeviceGroupRequest extends Model
{
    /**
     * @example qaf2tihq
     *
     * @var string
     */
    public $deviceGroupId;

    /**
     * @example TestIsolationId
     *
     * @var string
     */
    public $isolationId;
    protected $_name = [
        'deviceGroupId' => 'DeviceGroupId',
        'isolationId'   => 'IsolationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceDeviceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }

        return $model;
    }
}
