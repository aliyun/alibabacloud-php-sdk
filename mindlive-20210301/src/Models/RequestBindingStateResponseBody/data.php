<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\RequestBindingStateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bindAt;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $userAvatar;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $userSource;
    protected $_name = [
        'bindAt'     => 'BindAt',
        'deviceId'   => 'DeviceId',
        'userAvatar' => 'UserAvatar',
        'userId'     => 'UserId',
        'userNick'   => 'UserNick',
        'userSource' => 'UserSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindAt) {
            $res['BindAt'] = $this->bindAt;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->userAvatar) {
            $res['UserAvatar'] = $this->userAvatar;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->userSource) {
            $res['UserSource'] = $this->userSource;
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
        if (isset($map['BindAt'])) {
            $model->bindAt = $map['BindAt'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UserAvatar'])) {
            $model->userAvatar = $map['UserAvatar'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['UserSource'])) {
            $model->userSource = $map['UserSource'];
        }

        return $model;
    }
}
