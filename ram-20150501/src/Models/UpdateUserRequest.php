<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description The new description of the RAM user.
     *
     * The description must be 1 to 128 characters in length.
     * @example This is a cloud computing engineer.
     *
     * @var string
     */
    public $newComments;

    /**
     * @description The new display name of the RAM user.
     *
     * The name must be 1 to 128 characters in length.
     * @example xiaoq****
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @description The new email address of the RAM user.
     *
     * >  This parameter can be returned only on the China site (aliyun.com).
     * @example xiaoq****@example.com
     *
     * @var string
     */
    public $newEmail;

    /**
     * @description The new mobile phone number of the RAM user.
     *
     * >  This parameter can be returned only on the China site (aliyun.com).
     * @example 86-1860000****
     *
     * @var string
     */
    public $newMobilePhone;

    /**
     * @description The new username of the RAM user.
     *
     * The username must be 1 to 64 characters in length, and can contain letters, digits, periods (.), hyphens (-), and underscores (_).
     * @example xiaoq****
     *
     * @var string
     */
    public $newUserName;

    /**
     * @description The username of the RAM user.
     *
     * @example zhangq****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'newComments'    => 'NewComments',
        'newDisplayName' => 'NewDisplayName',
        'newEmail'       => 'NewEmail',
        'newMobilePhone' => 'NewMobilePhone',
        'newUserName'    => 'NewUserName',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newComments) {
            $res['NewComments'] = $this->newComments;
        }
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }
        if (null !== $this->newEmail) {
            $res['NewEmail'] = $this->newEmail;
        }
        if (null !== $this->newMobilePhone) {
            $res['NewMobilePhone'] = $this->newMobilePhone;
        }
        if (null !== $this->newUserName) {
            $res['NewUserName'] = $this->newUserName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewComments'])) {
            $model->newComments = $map['NewComments'];
        }
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['NewEmail'])) {
            $model->newEmail = $map['NewEmail'];
        }
        if (isset($map['NewMobilePhone'])) {
            $model->newMobilePhone = $map['NewMobilePhone'];
        }
        if (isset($map['NewUserName'])) {
            $model->newUserName = $map['NewUserName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
