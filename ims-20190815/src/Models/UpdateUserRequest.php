<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @example This is a cloud computing engineer.
     *
     * @var string
     */
    public $newComments;

    /**
     * @example new
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @example alice@example.com
     *
     * @var string
     */
    public $newEmail;

    /**
     * @example 86-1868888****
     *
     * @var string
     */
    public $newMobilePhone;

    /**
     * @example new@example.onaliyun.com
     *
     * @var string
     */
    public $newUserPrincipalName;

    /**
     * @example 20732900249392****
     *
     * @var string
     */
    public $userId;

    /**
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
