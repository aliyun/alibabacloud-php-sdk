<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class GetAuthTokenRequest extends Model
{
    /**
     * @description 用户的应用ID，在控制台创建应用时生成
     *
     * @var string
     */
    public $appId;

    /**
     * @description 用户UserId,在AppId下单独唯一
     *
     * @var string
     */
    public $userId;

    /**
     * @description 终端设备类型,通过控制台创建和查询
     *
     * @var string
     */
    public $appKey;

    /**
     * @description 终端设备ID
     *
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'appId'    => 'AppId',
        'userId'   => 'UserId',
        'appKey'   => 'AppKey',
        'deviceId' => 'DeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
     * @return GetAuthTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
