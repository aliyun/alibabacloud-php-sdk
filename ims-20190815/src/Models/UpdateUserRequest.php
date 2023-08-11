<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

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
     * The name must be 1 to 24 characters in length.
     * @example new
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @description The new email address of the RAM user.
     *
     * > This parameter is valid only on the China site (aliyun.com).
     * @example alice@example.com
     *
     * @var string
     */
    public $newEmail;

    /**
     * @description The new mobile phone number of the RAM user.
     *
     * > This parameter is valid only on the China site (aliyun.com).
     * @example 86-1868888****
     *
     * @var string
     */
    public $newMobilePhone;

    /**
     * @description The new logon name of the RAM user.
     *
     * The value of `UserPrincipalName` must be 1 to 128 characters in length and can contain letters, digits, periods (.), hyphens (-), and underscores (\_). The value of `<username>` must be 1 to 64 characters in length.
     * @example new@example.onaliyun.com
     *
     * @var string
     */
    public $newUserPrincipalName;

    /**
     * @description The ID of the RAM user.
     *
     * > You must specify only one of the following parameters: `UserPrincipalName` and `UserId`.
     * @example 20732900249392****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The logon name of the RAM user.
     *
     * > You must specify only one of the following parameters: `UserPrincipalName` and `UserId`.
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'newComments'          => 'NewComments',
        'newDisplayName'       => 'NewDisplayName',
        'newEmail'             => 'NewEmail',
        'newMobilePhone'       => 'NewMobilePhone',
        'newUserPrincipalName' => 'NewUserPrincipalName',
        'userId'               => 'UserId',
        'userPrincipalName'    => 'UserPrincipalName',
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
        if (null !== $this->newUserPrincipalName) {
            $res['NewUserPrincipalName'] = $this->newUserPrincipalName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['NewUserPrincipalName'])) {
            $model->newUserPrincipalName = $map['NewUserPrincipalName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
