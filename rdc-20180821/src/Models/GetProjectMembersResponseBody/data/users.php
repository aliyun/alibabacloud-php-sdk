<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetProjectMembersResponseBody\data;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $staffId;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'avatar'   => 'Avatar',
        'email'    => 'Email',
        'realName' => 'RealName',
        'staffId'  => 'StaffId',
        'nickName' => 'NickName',
        'id'       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->staffId) {
            $res['StaffId'] = $this->staffId;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['StaffId'])) {
            $model->staffId = $map['StaffId'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
