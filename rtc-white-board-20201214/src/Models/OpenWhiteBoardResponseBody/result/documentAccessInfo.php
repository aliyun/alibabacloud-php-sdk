<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponseBody\result;

use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponseBody\result\documentAccessInfo\userInfo;
use AlibabaCloud\Tea\Model;

class documentAccessInfo extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $collabHost;

    /**
     * @var int
     */
    public $permission;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'collabHost'  => 'CollabHost',
        'permission'  => 'Permission',
        'userInfo'    => 'UserInfo',
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

        return $model;
    }
}
