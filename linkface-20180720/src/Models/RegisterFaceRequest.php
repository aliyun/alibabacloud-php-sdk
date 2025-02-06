<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models;

use AlibabaCloud\Dara\Model;

class RegisterFaceRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $image;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $userInfo;
    protected $_name = [
        'groupId'  => 'GroupId',
        'image'    => 'Image',
        'userId'   => 'UserId',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }

        return $model;
    }
}
