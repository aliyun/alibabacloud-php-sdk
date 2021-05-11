<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\GetLoginTokenRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 用户ID
     *
     * @var string
     */
    public $appUid;

    /**
     * @description AppKey
     *
     * @var string
     */
    public $appKey;

    /**
     * @description 设备ID
     *
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'appUid'   => 'AppUid',
        'appKey'   => 'AppKey',
        'deviceId' => 'DeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}
