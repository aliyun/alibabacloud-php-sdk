<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetVisitorLoginDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 7pjxxx
     *
     * @var string
     */
    public $chatAppId;

    /**
     * @example 955e4bd7xxxxxxxxxxxxxd7898ba9fa0d0
     *
     * @var string
     */
    public $chatAppKey;

    /**
     * @example 4c51c9116c36537cb850dc1081d745df
     *
     * @var string
     */
    public $chatDeviceId;

    /**
     * @example {"accessToken":"oauth_cloud_key:+4oJXUAFSWxGD2YuRW4V/oUN0/8qJGNc0I*********n1E3DOr3Q3lX00ZnTpyqRi8Y6hYoLYA7n2ZkWuv485hVtXeSgnIQkKxXPbMgwoLxWaK//lI5Dn/mb4YuDifigv+ZyFzc+07vxm9ZFu/NjA==","accessTokenExpiredTime":86400000,"refreshToken":"oauth_cloud_key:/U+8UueDmpeUszhXC+SWow4pNLZp2C***********U/377BNXF+Mjo1lFgDk6GtEjNNoJpapX2mHH8GcRke2+yKQs/w4gAN9xSMn543Ciung+93pXV6IpQGbEVlu"}
     *
     * @var string
     */
    public $chatLoginToken;

    /**
     * @example wss://wss.im.dingtalk.cn
     *
     * @var string
     */
    public $chatServerUrl;

    /**
     * @example dac9c001****a15684ea91a81317
     *
     * @var string
     */
    public $chatUserId;
    protected $_name = [
        'chatAppId'      => 'ChatAppId',
        'chatAppKey'     => 'ChatAppKey',
        'chatDeviceId'   => 'ChatDeviceId',
        'chatLoginToken' => 'ChatLoginToken',
        'chatServerUrl'  => 'ChatServerUrl',
        'chatUserId'     => 'ChatUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatAppId) {
            $res['ChatAppId'] = $this->chatAppId;
        }
        if (null !== $this->chatAppKey) {
            $res['ChatAppKey'] = $this->chatAppKey;
        }
        if (null !== $this->chatDeviceId) {
            $res['ChatDeviceId'] = $this->chatDeviceId;
        }
        if (null !== $this->chatLoginToken) {
            $res['ChatLoginToken'] = $this->chatLoginToken;
        }
        if (null !== $this->chatServerUrl) {
            $res['ChatServerUrl'] = $this->chatServerUrl;
        }
        if (null !== $this->chatUserId) {
            $res['ChatUserId'] = $this->chatUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatAppId'])) {
            $model->chatAppId = $map['ChatAppId'];
        }
        if (isset($map['ChatAppKey'])) {
            $model->chatAppKey = $map['ChatAppKey'];
        }
        if (isset($map['ChatDeviceId'])) {
            $model->chatDeviceId = $map['ChatDeviceId'];
        }
        if (isset($map['ChatLoginToken'])) {
            $model->chatLoginToken = $map['ChatLoginToken'];
        }
        if (isset($map['ChatServerUrl'])) {
            $model->chatServerUrl = $map['ChatServerUrl'];
        }
        if (isset($map['ChatUserId'])) {
            $model->chatUserId = $map['ChatUserId'];
        }

        return $model;
    }
}
