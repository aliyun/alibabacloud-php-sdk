<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 649b79ab544d737fe9e0bc6c67cf****
     *
     * @var string
     */
    public $appKey;

    /**
     * @example 95000****
     *
     * @var string
     */
    public $appUid;

    /**
     * @example iOS_Device_F8594F51-FA81-470F-AAD9-6E254B77****
     *
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'appKey'   => 'AppKey',
        'appUid'   => 'AppUid',
        'deviceId' => 'DeviceId',
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
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}
