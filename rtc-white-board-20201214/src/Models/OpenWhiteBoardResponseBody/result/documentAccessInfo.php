<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponseBody\result;

use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponseBody\result\documentAccessInfo\userInfo;
use AlibabaCloud\Tea\Model;

class documentAccessInfo extends Model
{
    /**
     * @description 连接签名
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 白板长连接地址
     *
     * @var string
     */
    public $collabHost;

    /**
     * @description 权限码，取值：0:无权限，1:只读，2:读写
     *
     * @var int
     */
    public $permission;

    /**
     * @description 用户信息
     *
     * @var userInfo
     */
    public $userInfo;

    /**
     * @description 新协议长连接服务域名
     *
     * @var string
     */
    public $wsDomain;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'collabHost'  => 'CollabHost',
        'permission'  => 'Permission',
        'userInfo'    => 'UserInfo',
        'wsDomain'    => 'WsDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->collabHost) {
            $res['CollabHost'] = $this->collabHost;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }
        if (null !== $this->wsDomain) {
            $res['WsDomain'] = $this->wsDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documentAccessInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['CollabHost'])) {
            $model->collabHost = $map['CollabHost'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }
        if (isset($map['WsDomain'])) {
            $model->wsDomain = $map['WsDomain'];
        }

        return $model;
    }
}
