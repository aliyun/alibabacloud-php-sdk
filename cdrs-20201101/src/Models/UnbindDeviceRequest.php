<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class UnbindDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $deviceIds;
    protected $_name = [
        'corpId'    => 'CorpId',
        'deviceIds' => 'DeviceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DeviceIds'])) {
            $model->deviceIds = $map['DeviceIds'];
        }

        return $model;
    }
}
