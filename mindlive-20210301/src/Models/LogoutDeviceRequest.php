<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class LogoutDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userSource;
    protected $_name = [
        'userId'     => 'UserId',
        'userSource' => 'UserSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userSource) {
            $res['UserSource'] = $this->userSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogoutDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserSource'])) {
            $model->userSource = $map['UserSource'];
        }

        return $model;
    }
}
