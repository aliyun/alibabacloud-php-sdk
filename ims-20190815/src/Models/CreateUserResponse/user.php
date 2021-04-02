<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateUserResponse;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $lastLoginDate;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $mobilePhone;
    protected $_name = [
        'updateDate'        => 'UpdateDate',
        'email'             => 'Email',
        'comments'          => 'Comments',
        'userId'            => 'UserId',
        'lastLoginDate'     => 'LastLoginDate',
        'displayName'       => 'DisplayName',
        'userPrincipalName' => 'UserPrincipalName',
        'createDate'        => 'CreateDate',
        'mobilePhone'       => 'MobilePhone',
    ];

    public function validate()
    {
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('email', $this->email, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('lastLoginDate', $this->lastLoginDate, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('mobilePhone', $this->mobilePhone, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->lastLoginDate) {
            $res['LastLoginDate'] = $this->lastLoginDate;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['LastLoginDate'])) {
            $model->lastLoginDate = $map['LastLoginDate'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }

        return $model;
    }
}
